<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Lcobucci\JWT\Signer\Rsa\Sha256;
use Illuminate\Support\Facades\Hash;

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
        'admin' => false,
        'email_verified_at' => now(),
        // 'ticket_id' => 'DC9'.$faker->unique()->numerify($string = '######').'012',
        // 'api_token' => hash('sha256',str_random(60)),
        'remember_token' => str_random(60),
        'phone' => $this->faker->phoneNumber,
        'township' => $this->faker->word(),
        'password' => Hash::make('123456'), // password
        'dob' => $this->faker->dateTimeBetween('1990-01-01', '2012-12-31')->format('d/m/Y'),
        'gender' => $this->faker->randomElement(['male','female']),
        'location' => $this->faker->address,
        'employee_type' => $this->faker->randomElement(['studend','developer']),
        'occupation' => $this->faker->sentence,
        'company_name' => $this->faker->company,
        'study_place' => $this->faker->sentence,
        'dev_ide' => $this->faker->sentence,
        'about_devcon' => $this->faker->paragraph,
        'previous_year' => $this->faker->year,
    ];
});
