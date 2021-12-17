<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::find(1);
        return $user->getAllPermissions();
        // $users = User::all();
        // return view('users.index',compact('users'));
    }
}
