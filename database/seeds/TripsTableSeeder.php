<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $new_trip_object = new Trip();
            $new_trip_object->paese = $faker->state();
            $new_trip_object->citta = $faker->city();
            $new_trip_object->durata = $faker->numberBetween(1, 30);
            $new_trip_object->all_inclusive = $faker->boolean();
            $new_trip_object->prezzo = $faker->numberBetween(300, 1670);
            $new_trip_object->save();
        }
        // $trip = new Trip();
        // $trip->paese ='Albania';
        // $trip->citta ='Tirana';
        // $trip->durata = 7;
        // $trip->all_inclusive = 1;
        // $trip->prezzo = 500;
        // $trip->save();
    }
}
