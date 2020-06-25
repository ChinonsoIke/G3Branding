<?php

namespace App\Http\Controllers\Administrator;

use App\Administrator;
use App\Http\Controllers\Controller;
use App\Notifications\Administrator\AdminPasswordNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class AdministratorsController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:administrators-management');
        $this->middleware('permission:add-administrators')->only('create');
        //$this->middleware('permission:view-administrators')->only('show');
        //$this->middleware('permission:edit-administrators')->only(['edit', 'update']);
        //$this->middleware('permission:delete-administrators')->only('destroy');
    }

    public function index()
    {
        $administrators = Administrator::all();
        $roles = Role::where('guard_name','admin')->get();
        return view('backend.administrators.index', compact('administrators', 'roles'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:filter',
            'role' => 'required',
        ]);

        if ((!$request->user()->hasRole('Developer')) && ($request->user()->getRoleNames()[0] !== $request->role)) {
            return back()->with('error', 'sorry you cannot assign this role to a user');
        }
        $str_passcode = Str::random(8);
        $admin =  Administrator::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($str_passcode),
        ]);
        $admin->assignRole($request->role);
        $admin->notify(new AdminPasswordNotification($str_passcode));
        return back()->with('success',"Record created successfully");
    }
}
