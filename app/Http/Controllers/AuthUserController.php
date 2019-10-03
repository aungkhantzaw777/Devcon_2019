<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{User,Ticket};
use App\AuthenticatesUser;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterForm;
use App\Mail\UserRegister;
use Faker\Factory as Faker;
use Auth;
use Illuminate\Validation\Rule;

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

    public function postActivate(RegisterForm $request)
    {

        $user = $this->request->all();
        $user['admin'] = false;
        $user['password'] = Hash::make($user['password']);
        $ticket_id = $user['ticket_id'];
        $user = User::create($user);

        Ticket::where('ticket_id',$ticket_id)->update(['user_id'=> $user->id]);
        \Mail::to('aungkhantzaw133@gmail.com')->queue(new UserRegister($user));
        return redirect('/success');
    }

    public function postRegister(RegisterForm $request)
    {

        $user = \App\User::create([
            'username' => $request['username'],
            'email' => $request['email'],
            'admin' => false,
            'phone' => $request['phone'],
            'dob' => $request['dob'],
            'gender' => $request['gender'],
            'password'=> Hash::make($request['password']),
            'api_token'=> str_random(60),
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
        $ticket_id = Ticket::where('user_id',null)->first()->ticket_id;
        Ticket::where('ticket_id',$ticket_id)->update(['user_id'=> $user->id]);


        \Mail::to('aungkhantzaw133@gmail.com')->queue(new UserRegister($user));
        return redirect('/success');
    }

    public function success(){
        return view('success');
    }

    public function activate()
    {
        $this->valiateTicket();
        $unAvaliableTicket = Ticket::alreadyActivate($this->request->ticket_id);
        if($unAvaliableTicket){
            return view('welcome')->withErrors(['ticket_id' => 'Ticket Alraeay Activate']);
        }else{
            $route = "/activateAccount/".$this->request->ticket_id;
            return redirect()->intended($route);
        }
    }

    public function activateAccount()
    {
        return view('auth.activate')
                ->with(['ticket_id' => $this->request->ticket_id]);
    }

    private function valiateTicket()
    {
        request()->validate([
            'ticket_id' => 'required|exists:tickets,ticket_id'
        ]);
    }


}
