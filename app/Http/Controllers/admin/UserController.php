<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.userList');
    }

    public function edit()
    {
        return view('admin.user.userEdit');
    }
}
