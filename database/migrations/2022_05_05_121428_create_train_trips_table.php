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
            $table->string('TrainProductor', 100)->nullable();
            // $table->string('DepartureStation', 100)->nullable();
            // $table->string('ArrivalStation', 100)->nullable();
            // $table->dateTime('DepartureTime')->nullable();
            // $table->dateTime('ArrivalTime')->nullable();
            // $table->integer('Train-ID')->nullable();
            // $table->integer('CarriagesNumber')->nullable();
            // $table->time('Delay')->default(null);
            // $table->boolean('Deleted')->default(false);
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
