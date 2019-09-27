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
    use \Illuminate\Foundation\Auth\AuthenticatesUsers;

    protected $request;

    public function __construct(Request $request)
    {
        // $this->middleware('auth');
        $this->request = $request;
    }
    
    
    public function register()
    {
        return view('auth.register');
    }

    public function login() 
    {
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email'           => 'required|email|exists:users|max:255',
            'password'           => 'required|string',
        ]);
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            // Success
            return redirect()->intended('/home');
        } else {
            // Go back on error (or do what you want)
            return redirect()->back();
        }
    }

    public function postTicket()
    {
        $this->validate($this->request,[
            'ticket_id' => 'required'
        ]);

        $user = \App\User::byTicket($this->request->ticket_id);
        if($user){
            Auth::login($user);
            return redirect()->intended('/home');
        }else{
            return redirect()->back();
        }
    }

    public function postRegister(RegisterForm $request)
    {
        $faker = Faker::create();

        $user = \App\User::create([
            'username' => $request['username'],
            'email' => $request['email'],
            'admin' => false,
            'phone' => $request['phone'],
            'dob' => $request['dob'],
            'gender' => $request['gender'],
            'password'=> Hash::make($request['password']),
            'api_token'=> str_random(60),
            'ticket_id'=>  'DC9'.$faker->unique()->numerify('#####').'90',
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
        
        return redirect('/success');
    }

    public function success(){
        return view('success');
    }
}
