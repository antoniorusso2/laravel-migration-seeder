<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        foreach (range(1, 10) as $train) {

            $newTrain = new Train();

            $newTrain->company = $faker->company;
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('now', '+1 day');
            $newTrain->arrival_time = $faker->dateTimeBetween($newTrain->departure_time, '+1 day');
            $newTrain->train_code = $faker->bothify('??-####');
            $newTrain->number_of_carriages = $faker->numberBetween(10, 20);
            $newTrain->capacity = 800;
            $newTrain->reserved_seats = $faker->numberBetween(200, 800);
            $newTrain->in_time = $faker->boolean;
            $newTrain->cancelled = $faker->boolean;

            $newTrain->save();
        }
    }
}
