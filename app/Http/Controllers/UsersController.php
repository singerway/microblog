<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class UsersController extends Controller
{
    //进入注册页面
    public function create() {
        return view('users.create');
    }
}
