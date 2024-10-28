<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for ($i=0; $i < 20; $i++) {
            $newTrain = new Train();
            $newTrain->brand = $faker->name;
            $newTrain->departure_day = $faker->date();
            $newTrain->departure_station = $faker->name;
            $newTrain->arrival_station = $faker->name;
            $newTrain->departure_hour = $faker->time();
            $newTrain->arrival_hour = $faker->time();
            $newTrain->train_code = $faker->ean8();
            $newTrain->wagon_number = $faker->randomDigit();
            $newTrain->is_punctual = $faker->boolean();
            $newTrain->is_canceled = $faker->boolean();
            $newTrain->save();
        }
    }
}