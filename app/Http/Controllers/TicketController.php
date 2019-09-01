<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TicketStoreForm;
use App\Ticket;

class TicketController extends Controller
{
    
    

   
    public function create()
    {
       
        return view('client.create-ticket');
    }

    
    public function store(TicketStoreForm $request)
    {
        $attribute = $request->all();

        $attribute['user_id'] = auth()->id();
        
        Ticket::create($attribute);
        return redirect('/home');
        
    }

    
    
}
