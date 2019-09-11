<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'ticket_id' => 'DC9'.$faker->unique()->numerify($string = '######').'012',
        'remember_token' => Str::random(10),
        'phone' => $this->faker->phoneNumber,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'dob' => $this->faker->dateTimeBetween('1990-01-01', '2012-12-31')->format('d/m/Y'),
        'gender' => $this->faker->randomElement(['male','female']),
        'location' => $this->faker->address,
        'employee_type' => $this->faker->randomElement(['studend','developer']),
        'occupation' => $this->faker->sentence,
        'company_name' => $this->faker->company,
        'study_place' => $this->faker->sentence,
        'position' => $this->faker->sentence,
        'dev_ide' => $this->faker->sentence,
        'about_devcon' => $this->faker->paragraph,
        'previous_year' => $this->faker->year,
    ];
});
