<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User')->create([
            'username'=>'dev_con',
            'email'=>'dev_con@gmail.com',
            'password' => Hash::make('d@v_c0n'),
            'admin' => true
        ]);
    }
}
