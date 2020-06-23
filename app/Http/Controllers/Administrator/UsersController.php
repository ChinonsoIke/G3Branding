<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:users-management');
        $this->middleware('permission:view-users')->only('details');
    }

    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('backend.users.index', compact('users'));
    }

    public function details(User $user)
    {
        return view('backend.users.details',compact('user'));
    }
}
