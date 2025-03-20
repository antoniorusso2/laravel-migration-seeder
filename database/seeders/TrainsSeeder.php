<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Roma',
                'arrival_station' => 'Milano',
                'departure_time' => '2023-05-01 10:00:00',
                'arrival_time' => '2023-05-01 12:00:00',
                'train_code' => 'T123',
                'number_of_carriages' => 3,
                'in_time' => 1,
                'cancelled' => 0,
            ],
        ];

        foreach ($trains as $train) {
            $newTrain = new Train($train);

            $newTrain->save();
        }
    }
}
