<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AuthenticatesUser;
use App\Http\Requests\RegisterForm;

class AuthUserController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function postRegister(RegisterForm $request)
    {
        \App\User::create($request->all());
        return 'your welcom';
    }

    public function login(){

    }
}
