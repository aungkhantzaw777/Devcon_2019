<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AuthenticatesUser;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterForm;
use Faker\Factory as Faker;
use Auth;
class AuthUserController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    private function faker()
    {
        return Faker::create();
    }

    public function postRegister(RegisterForm $request)
    {
        $faker = Faker::create();

        $user = \App\User::create([
            'username' => $request['username'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'dob' => $request['dob'],
            'gender' => $request['gender'],
            'password'=> Hash::make($request['password']),
            'ticket_id'=>  'DC9'.$faker->sentence.'90',
            'location' => $request['location'],
            'employee_type' => $request['employee_type'],
            'occupation' => $request['occupation'],
            'company_name' => $request['company_name'],
            'study_place' => $request['study_place'],
            'position' => $request['position'],
            'dev_ide' => $request['dev_ide'],
            'about_devcon' => $request['about_devcon'],
            'previous_year' => $request['previous_year']
        ]);
        Auth::attamp(['email'=>$user->email]);
        return '/home';
    }

    public function login(){

    }
}
