<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // $trains = [
        //     [
        //         'company' => 'Trenitalia',
        //         'departure_station' => 'Roma',
        //         'arrival_station' => 'Milano',
        //         'departure_time' => '2023-05-01 10:00:00',
        //         'arrival_time' => '2023-05-01 12:00:00',
        //         'train_code' => 'T123',
        //         'number_of_carriages' => 3,
        //         'in_time' => 1,
        //         'cancelled' => 0,
        //     ],
        // ];





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
