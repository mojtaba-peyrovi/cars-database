<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('price');
            $table->string('status');
            $table->year('year');
            $table->string('make');
            $table->string('model');
            $table->string('trim');
            $table->string('bodyType');
            $table->string('gear');
            $table->string('engine');
            $table->string('fuel');
            $table->integer('mileage');
            $table->text('desc');
            $table->string('features');
            $table->string('color');
            $table->string('driveType');
            $table->string('doors');
            $table->string('location');
            $table->string('imgUrl');
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
        Schema::dropIfExists('cars');
    }
}
