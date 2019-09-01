<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use WithFaker, RefreshDatabase;
    
    public function test_user_can_register () 
    {
        $this->withoutExceptionHandling();
        
        $attributes = factory('App\User')->raw(['password' => 'password']);
        
        
        $this->post('/register', $attributes)->assertRedirect('home');
        $this->assertDatabaseHas('users', [
            'username' => $attributes['username'],
            'email' => $attributes['email'],
            'phone' => $attributes['phone'],
            'location' => $attributes['location']
        ]);
        $this->get('/home')->assertSee('logout');
    }

    public function test_username_required ()
    {
        $attributes = factory('App\User')->raw(['username' => '']);

        $this->post('/register', $attributes)->assertSessionHasErrors('username');
        
    }
    
}
