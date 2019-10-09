<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserAccountActivate extends TestCase
{
    use WithFaker, RefreshDatabase;

    public function test_user_can_add_ticket_id() {
        $this->withoutExceptionHandling();
        $ticket_id = factory('App\Ticket')->create()->ticket_id;
        $this->post('activate',['ticket_id' => $ticket_id])->assertRedirect('/activateAccount/'.$ticket_id);

    }
    public function test_user_cannot_access_wrong_ticket () {
        // $this->withoutExceptionHandling();
        $this->post('activate',['ticket_id' => 'error_ticket_id'])->assertSessionHasErrors('ticket_id');
        $this->get('/')->assertSee('Invalid Ticket ID!');

        $this->post('activate',['ticket_id' => ''])->assertSessionHasErrors('ticket_id');
        $this->get('/')->assertSee('Please Fill Ticket ID!');
    }
    public function test_user_activate_account() {
        $this->withoutExceptionHandling();
        $ticket_id = factory('App\Ticket')->create()->ticket_id;
        $this->get('/activateAccount/'.$ticket_id)->assertSee('username');
    }
}
