<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGpasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gpas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->float('gpa1001');
            $table->float('gpa1002');
            $table->float('gpa2001');
            $table->float('gpa2002');
            $table->float('gpa3001');
            $table->float('gpa3002');
            $table->float('gpa4001');
            $table->float('gpa4002');
            $table->float('gpa5001');
            $table->float('gpa5002');
            $table->float('cgpa100');
            $table->float('cgpa200');
            $table->float('cgpa300');
            $table->float('cgpa400');
            $table->float('cgpa500');
            $table->float('finalCGPA');
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
        Schema::dropIfExists('gpas');
    }
}
