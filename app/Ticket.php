<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\user');
    }

    # return collection
    public static function byTicket($ticket_id)
    {
        return static::where('ticket_id',$ticket_id)->first();
    }

    # return boolean
    public static function alreadyActivate($ticket_id)
    {
        $ticket =  static::where('ticket_id',$ticket_id)->first();
        return $ticket->user_id ? true : false;
    }
}
