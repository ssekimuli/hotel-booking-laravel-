<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartroomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartroom', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user')->unsigned();
            $table->integer('room')->nullable();
            $table->string('cartimg')->nullable();
            $table->integer('package')->nullable();
            $table->string('days');
            $table->string('fee');
            $table->string('arrival');
            $table->string('departure');
            //category
            $table->foreign('user')->references('id')->on('user');
            $table->foreign('package')->references('id')->on('package');
            $table->foreign('room')->references('id')->on('room');
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
        Schema::dropIfExists('cartroom');
    }
}
