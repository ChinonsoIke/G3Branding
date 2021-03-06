<?php

namespace App\Http\Middleware;

use Closure;

class PermissionManagement
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param $permission
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)
    {
        if (!$request->user()->hasPermissionTo($permission)) {
            if ($request->ajax()) {
                return response()->json([
                    'message' => 'Permission Denied'
                ],422);
            }
            $value = ucfirst(str_replace('-',' ',$permission));
            if (empty( $request->header('referer'))) {
                return redirect(route('admin.dashboard'));
            }
            return back()->with('error','Unauthorized action, you don\'t have the permission to ' . $value);
        }
        return $next($request);
    }
}
