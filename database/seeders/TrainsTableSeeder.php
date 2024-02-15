<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'agency' => 'Trenitalia',
                'departure_station' => 'Cagliari',
                'arrival_station' => 'Macomer',
                'departure_time' => '2024-02-15 18:00',
                'arrival_time' => '2024-02-15 20:00',
                'train_code' => '4758',
                'number_of_carriages' => '10',
                'in_time' => true,
                
            ]
            ];

            foreach($trains as $train){
                $new_train = new Train();
                $new_train ->agency = $train['agency'];
                $new_train ->departure_station = $train['departure_station'];
                $new_train ->arrival_station = $train['arrival_station'];
                $new_train ->departure_time = $train['departure_time'];
                $new_train ->arrival_time = $train['arrival_time'];
                $new_train ->train_code = $train['train_code'];
                $new_train ->number_of_carriages = $train['number_of_carriages'];
                $new_train ->in_time = $train['in_time'];
                
                $new_train -> save();
            }
    }
}
