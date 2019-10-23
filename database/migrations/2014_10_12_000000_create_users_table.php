<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('email')->unique();
            $table->boolean('admin')->nuallable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('api_token',80)->unique()->nullable();
            $table->string('phone');
            $table->string('dob');
            $table->string('gender');
            $table->string('township')->nullable();
            $table->string('location');
            $table->string('employee_type')->nullable();
            $table->text('occupation')->nullable();
            $table->string('company_name')->nullable();
            $table->string('study_place')->nullable();
            $table->string('dev_ide')->nullable();
            $table->string('dev_platform')->nullable();
            $table->text('about_devcon')->nullable();
            $table->string('previous_year')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
