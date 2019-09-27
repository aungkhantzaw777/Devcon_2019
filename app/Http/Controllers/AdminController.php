<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    # auth admin
    public function __construct()
    {
        $this->middleware('is_admin',['except' => ['login', 'postLogin']]);
    }

    # redirect to index
    public function index()
    {
        return view('admin.home')
        ->withUsers(\App\User::paginate(10));
    }
    public function search(Request $request)
    {
        $users = \App\User::where('username','like', $request->keyword.'%')
                    ->orWhere('ticket_id','like',$request->keyword.'%')
                    ->paginate(10);
        return view('admin.home',compact('users'));
    }
    public function login()
    {
        return view('admin.login');
    }
    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password,'admin' => true])) {
            // Authentication passed...
            return redirect()->intended('dev_con');
        }
        return redirect()->intended('dev_con/login');
    }

    # logout
    public function logout()
    {
        Auth::logout();
        return redirect()->intended('dev_con/login');
    }
}
