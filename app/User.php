<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

use function GuzzleHttp\Psr7\hash;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username' ,
        'email' ,
        'admin',
        'phone' ,
        'dob' ,
        'gender' ,
        'password',
        'api_token',
        'township',
        'location' ,
        'employee_type' ,
        'occupation' ,
        'company_name' ,
        'study_place' ,
        'dev_ide' ,
        'dev_platform' ,
        'about_devcon' ,
        'previous_year' ,
    ];

    
    protected $hidden = [
        'ticket_id', 'remember_token',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function ticket()
    {
        return $this->hasOne('App\Ticket');
    }

    public function isAdmin()
    {
        return ($this->admin == 1)? true : false;
    }

    public static function byEmail($email)
    {
        return static::where('email',$email)->first();
    }
    // public static function byTicket($ticket)
    // {
    //     return static::where('ticket_id',$ticket)->first();
    // }

    

}
