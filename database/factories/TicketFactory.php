<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ticket;
use Faker\Generator as Faker;

$factory->define(Ticket::class, function (Faker $faker) {
    return [
        'user_id' => null,
        'ticket_id' => 'DC9'. $faker->unique()->numerify("######").'012',
        'sale_online' => $faker->randomElement([1,0])
    ];
});
