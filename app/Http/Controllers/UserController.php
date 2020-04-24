<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = \App\User::all();
        return $users;
    }

    public function show($id)
    {
        $users = \App\User::findOrfail($id);
        return $users;
    }
}
