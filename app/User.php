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
        'phone' ,
        'dob' ,
        'gender' ,
        'password',
        'api_token',
        'ticket_id',
        'location' ,
        'employee_type' ,
        'occupation' ,
        'company_name' ,
        'study_place' ,
        'position' ,
        'dev_ide' ,
        'about_devcon' ,
        'previous_year' ,
    ];

    
    protected $hidden = [
        'ticket_id', 'remember_token',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tickets()
    {
        require $this->hasMany('App\Ticket');
    }

    public static function byEmail($email)
    {
        return static::where('email',$email)->first();
    }

}
