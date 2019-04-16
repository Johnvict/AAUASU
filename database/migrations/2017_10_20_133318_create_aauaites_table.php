<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAauaitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aauaites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MatricNumber')->unique();
            $table->string('Name');
            $table->string('Email')->unique();
            $table->string('Password');
            //$table->string('Username');
            //$table->string('Faculty');
            //$table->string('Department');
            //$table->string('PhoneNumber')->unique();
            //$table->string('Level');
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
        Schema::dropIfExists('aauaites');
    }
}
