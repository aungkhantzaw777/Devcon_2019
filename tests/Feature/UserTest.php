<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    // use WithFaker, RefreshDatabase;
    use WithFaker, RefreshDatabase;

    public function test_user_can_register ()
    {
        $this->withoutExceptionHandling();

        factory('App\Ticket')->create();

        $attributes = factory('App\User')->raw(['password' => '123456', 'password_confirmation' => '123456']);

        $this->post('/register', $attributes);
        
        $this->assertDatabaseHas('users', [
            'username' => $attributes['username'],
            'email' => $attributes['email'],
            'phone' => $attributes['phone'],
            'location' => $attributes['location']
        ]);
        $this->get('/success')->assertSee('success');
    }

    public function test_user_validation (){
        $attributes = factory('App\User')->raw(['username' => '']);
        $this->post('/register', $attributes)->assertSessionHasErrors('username');
    }

    public function test_ticket_not_avaliable() {
        $this->withoutExceptionHandling();
        \DB::table('tickets')->delete();
        factory('App\Ticket')->create(['user_id' => factory('App\User')->create()->id]);

        $attributes = factory('App\User')->raw(['password' => '123456', 'password_confirmation' => '123456']);
        $this->post('/register', $attributes)->assertSessionHasErrors('ticket_id');
        $this->get('/register')->assertSee('Ticket is not avaliable in here!');
    }



}
