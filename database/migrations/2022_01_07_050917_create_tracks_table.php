<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedInteger('meal_id');
            $table->foreign('meal_id')->references('id')->on('meals');

            $table->unsignedInteger('meal_id2');
            $table->foreign('meal_id2')->references('id')->on('meals');

            $table->unsignedInteger('meal_id3');
            $table->foreign('meal_id3')->references('id')->on('meals');

            $table->unsignedInteger('total'); 

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
        Schema::dropIfExists('tracks');
    }
}
