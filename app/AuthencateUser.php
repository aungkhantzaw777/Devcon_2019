<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Testing\WithFaker;

class AuthenticatesUser
{
    use ValidatesRequests, WithFaker;

    /**
     * @var Request
     */
    protected $request;

    /**
     * Create a new AuthenticatesUser instance.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Send a sign in invitation to the user.
     */
    public function invite()
    {
        $this->validateRequest()
             ->createToken()
             ->send();
    }

    /**
     *  user register
     */
    public function create()
    {
        $this->validateRegister()
            ->createUser()
            ->createToken()
             ->send();

    }

    /**
     * create a user
     */

    public function createUser()
    {
        User::create([
            'username' => $this->request->username,
            'email' => $this->request->email,
            'phone' => $this->request->phone,
            'dob' => $this->request->dob,
            'ticket_id' => 'DC9'.$this->faker->unique()->randomDigit.'012',
            'gender' => $this->request->gender,
            'location' => $this->request->location,
            'employee_type' => $this->request->employee_type,
            'occupation' => $this->request->occupation,
            'company_name' => $this->request->company_name,
            'study_place' => $this->request->study_place,
            'position' => $this->request->position,
            'dev_ide' => $this->request->dev_ide,
            'about_devcon' => $this->request->about_devcon,
            'previous_year' => $this->request->previous_year,
        ]);
    }

    /**
     * Log in the user associated with a token.
     *
     * @param  LoginToken $token
     * @return void
     */
    public function login(LoginToken $token)
    {
        Auth::login($token->user);

        $token->delete();
    }

    /**
     * Validate the request data.
     *
     * @return $this
     */
    protected function validateRequest()
    {
        $this->validate($this->request, [
            'email' => 'required|unique:users,email|max:255',
            'phone' => 'required|unique:users,phone|max:255'
        ]);

        return $this;
    }

    /**
     * Validate the request data.
     *
     * @return $this
     */
    protected function validateRegister()
    {
        $this->validate($this->request, [
            'email' => 'required|email|exists:users'
        ]);

        return $this;
    }

    /**
     * Prepare a log in token for the user.
     *
     * @return LoginToken
     */
    protected function createToken()
    {
        $user = User::byEmail($this->request->email);

        return LoginToken::generateFor($user);
    }
}
