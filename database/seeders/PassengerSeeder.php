<?php

namespace Database\Seeders;

use App\Models\Passenger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Testing\Fakes\Fake;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for ($i=0; $i < 10 ; $i++) {
            # code...
            $newPassenger = new Passenger();
            $newPassenger->first_name = $faker->name;
            $newPassenger->last_name = $faker->name;
            $newPassenger->age = $faker->numberBetween(18, 50);
            $newPassenger->save();
        }

    }
}