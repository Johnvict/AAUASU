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
            $table->increments('id');
            $table->string('Password');
            $table->string('Name');
            $table->string('MatricNumber')->unique();
            $table->string('Username')->unique();
            $table->string('Email')->unique();
            $table->string('Gender');
            $table->string('PhoneNumber')->unique();
            $table->string('Faculty');
            $table->string('Department');
            $table->string('Level');
            $table->string('Avatar');
            $table->string('About');
            $table->string('PostHeld');
            $table->string('is_admin');
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
