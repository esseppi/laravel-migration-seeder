<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\TrainTrip;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $limit = 50;
        for ($i = 1; $i < $limit; $i++) {
            $fakeTrips = [
                'TrainProductor' => $faker->company(),
                'DepartureStation' => $faker->city(),
                'ArrivalStation' => $faker->city(),
                'DepartureTime' => $faker->date(),
                'TrainID' => $faker->randomDigit(),
                'CarriagesNumber' => $faker->randomNumber(5, false),
                'Delay' => $faker->time(),
                'Deleted' => null,
            ];

            $tripsData = new TrainTrip;
            $tripsData->fill($fakeTrips);
            $tripsData->save();
        }
    }
}
