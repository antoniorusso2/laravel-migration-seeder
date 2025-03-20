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

            $newTrain = new Train([
                'company' => $faker->company(),
                'departure_station' => $faker->city(),
                'arrival_station' => $faker->city(),
                'departure_time' => $faker->dateTimeBetween('now', '+1 year', 'Europe/Rome'),
                'arrival_time' => $faker->dateTimeBetween('now', '+1 year', 'Europe/Rome'),
                'train_code' => $faker->unique()->ean13(),
                'number_of_carriages' => $faker->numberBetween(5, 10),
                'capacity' => 1000,
                'reserved_seats' => $faker->numberBetween(0, 1000),
                'in_time' => $faker->boolean(),
                'cancelled' => $faker->boolean(),
            ]);

            $newTrain->save();
        }
    }
}
