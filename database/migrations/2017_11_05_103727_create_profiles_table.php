<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('user_UserId');
            $table->string('Name');
            $table->string('Gender');
            $table->string('Password');
            $table->string('Username')->unique();
            $table->string('MatricNumber')->unique();
            $table->string('Email')->unique();
            $table->string('PhoneNumber')->unique();
            $table->string('Faculty');
            $table->string('Department');
            $table->string('Level');
            $table->string('Avatar');
            $table->string('About');
            $table->string('PostHeld');
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
        Schema::dropIfExists('profiles');
    }
}
