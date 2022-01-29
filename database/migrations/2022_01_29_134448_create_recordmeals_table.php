<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordmealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recordmeals', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('date')->nullable();

            $table->string('meal_breakfast')->nullable();

            $table->unsignedInteger('qty1')->nullable();

            $table->unsignedInteger('subT1')->nullable();

            $table->string('meal_lunch')->nullable();

            $table->unsignedInteger('qty2')->nullable();

            $table->unsignedInteger('subT2')->nullable();

            $table->string('meal_dinner')->nullable();

            $table->unsignedInteger('qty3')->nullable();

            $table->unsignedInteger('subT3')->nullable();

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
        Schema::dropIfExists('recordmeals');
    }
}
