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
            $table->string('Train-Productor', 100);
            $table->string('Departure-Station', 100);
            $table->string('Arrival-Station', 100);
            $table->dateTime('Departure-Time');
            $table->dateTime('Arrival-Time');
            $table->integer('Train-ID');
            $table->integer('CarriagesNumber');
            $table->time('Delay')->nullable(true);
            $table->boolean('Deleted')->default(false);
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
