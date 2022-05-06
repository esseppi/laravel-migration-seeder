<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_trips', function (Blueprint $table) {
            $table->id();
            $table->string('TrainProductor', 100);
            $table->string('DepartureStation')->nullable();
            $table->string('ArrivalStation')->nullable();
            $table->dateTime('DepartureTime')->nullable();
            $table->dateTime('ArrivalTime')->nullable();
            $table->integer('TrainID')->nullable();
            $table->integer('CarriagesNumber')->nullable();
            $table->time('Delay')->nullable();
            $table->boolean('Deleted')->nullable();
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
        Schema::dropIfExists('train_trips');
    }
}
