<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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
}
