<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TicketTest extends TestCase
{
    use WithFaker,RefreshDatabase;

    public function test_authenticated_user_can_buy_ticket () 
    {
        
        
        $attributes = factory('App\Ticket')->raw();
        
        
        $this->post('/ticket', $attributes)->assertRedirect('/login');
        // $this->assertDatabaseHas('tickets', $attributes);


    }
    public function test_a_user_can_buy_ticket()
    {
        $this->actingAs(factory('App\User')->create());

        $attributes = [
            'code' => $this->faker->word  
        ];

        $this->post('/ticket', $attributes)->assertRedirect('/home');
        $this->assertDatabaseHas('tickets', [
            'user_id' => auth()->id(),
            'code' => $attributes['code']
        ]);
    }
}
