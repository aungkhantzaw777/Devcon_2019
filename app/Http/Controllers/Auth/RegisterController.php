<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Faker\Factory as Faker;

class RegisterController extends Controller
{
    

    use RegistersUsers;

    
    protected $redirectTo = '/home';

    
    public function __construct()
    {
        $this->middleware('guest');
    }

    

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'dob' => ['required'],
            'gender' => ['required'],
            'location' => ['required'],
            'employee_type' => ['required'],
            'occupation' => ['required'],
            'company_name' => ['required'],
            'study_place' => ['required'],
            'position' => ['required'],
            'dev_ide' => ['required'],
            'about_devcon' => ['required'],
            'previous_year' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $faker = Faker::create();
        
        return User::create([
            
            'username' => $data['username'],
            'email' => $data['email'],
            'admin' => false,
            'phone' => $data['phone'],
            'dob' => $data['dob'],
            'ticket_id' => 'DC9'.$faker->unique()->randomDigit.'012',
            'gender' => $data['gender'],
            'location' => $data['location'],
            'employee_type' => $data['employee_type'],
            'occupation' => $data['occupation'],
            'company_name' => $data['company_name'],
            'study_place' => $data['study_place'],
            'position' => $data['position'],
            'dev_ide' => $data['dev_ide'],
            'about_devcon' => $data['about_devcon'],
            'previous_year' => $data['previous_year'],
            
        ]);
    }
}
