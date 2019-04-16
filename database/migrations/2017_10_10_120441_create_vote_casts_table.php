<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoteCastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote_casts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('ArtY');
            $table->string('BMusic');
            $table->string('BRec');
            $table->string('IndSong');
            $table->string('BDrama');
            $table->string('BDance');
            $table->string('BComed');
            $table->string('BMc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vote_casts');
    }
}
