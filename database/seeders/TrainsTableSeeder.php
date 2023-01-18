<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 30 ; $i++) { 
            $newTrain = new Train();
            $newTrain->company = $faker->randomElement(['italo','frecciarossa','trenitalia','trenord']);
            $newTrain->from = $faker->city();
            $newTrain->to = $faker->city();
            $newTrain->time_of_departure = $faker->date();
            $newTrain->time_of_arrival = $faker->date();
            $newTrain->lenght_of_journey = $faker->numberBetween(3,6);
            $newTrain->stops = $faker->numberBetween(3,9);
            $newTrain->train_number = $faker->randomNumber(4, true);
            $newTrain->train_carriage = $faker->randomNumber(2, true);
            $newTrain->is_on_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
            $newTrain->save();
        }
    }
}
