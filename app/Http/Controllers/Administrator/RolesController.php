<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:privilege-management');
        $this->middleware('permission:add-roles')->only(['addRole', 'updateRole']);
        $this->middleware('permission:delete-roles')->only('deletePermission');
        $this->middleware('permission:sync-permissions')->only('addPermission');
    }

    public function index()
    {
        $roles = Role::where('guard_name','admin')->get();
        return view('backend.role.index',compact('roles'));
    }

    public function addRole(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:3|unique:roles',
            'permissions' => 'required_if:guard,admin',
            'guard' => 'required|in:web,admin'
        ],[
            'permissions.required' => 'You must assign at least one permission to this role'
        ]);
        $role  = Role::create(['guard_name' => $request->guard,'name' => $request->name]);
        if ($request->guard === 'admin') {
            $permissions = $request['permissions'];
            $role->syncPermissions($permissions);
        }
        return back()->with('success','Role created successfully');
    }

    public function addPermission(Request $request)
    {
        $name = strtolower(str_replace(' ','-',$request->name));
        app()['cache']->forget('spatie.permission.cache');
        $permission = Permission::create(['name' => $name]);
        //Developer Role must have all permission
        $developer = Role::findByName('Developer');
        $developer->givePermissionTo($permission);
        return back()->with('success','Permission created successfully');
    }

    public function updateRole(Request $request)
    {
        $role = Role::findOrFail($request->role);
        $permissions =  $request['permissions'];
        $role->syncPermissions($permissions);
        $role->name = $request->name;
        $role->save();
        return back()->with('success','Role has been updated successfully');
    }

    public function deletePermission(Request $request) {
        if (auth()->user()->hasRole('Developer')) {
            $permission = Permission::findOrFail($request->permission);
            $roles = Role::where('guard_name','admin')->get();
            foreach ($roles as $role) {
                if ($role->hasPermissionTo($permission->name)) {
                    $role->revokePermissionTo($permission->name);
                }
            }
            Permission::findById($request->permission)->delete();
            return back()->with('success','Permission deleted successfully');
        }
        return response()->json([
            'message' => 'Contact a Developer to delete a permission'
        ],422);
    }
}
