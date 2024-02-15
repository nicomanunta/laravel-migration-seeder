<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     $trains = [
    //         [
    //             'agency' => 'Trenitalia',
    //             'departure_station' => 'Cagliari',
    //             'arrival_station' => 'Macomer',
    //             'departure_time' => '2024-02-15 18:00',
    //             'arrival_time' => '2024-02-15 20:00',
    //             'train_code' => '4758',
    //             'number_of_carriages' => '10',
    //             'in_time' => true,
                
    //         ]
    //         ];

    //         foreach($trains as $train){
    //             $new_train = new Train();
    //             $new_train ->agency = $train['agency'];
    //             $new_train ->departure_station = $train['departure_station'];
    //             $new_train ->arrival_station = $train['arrival_station'];
    //             $new_train ->departure_time = $train['departure_time'];
    //             $new_train ->arrival_time = $train['arrival_time'];
    //             $new_train ->train_code = $train['train_code'];
    //             $new_train ->number_of_carriages = $train['number_of_carriages'];
    //             $new_train ->in_time = $train['in_time'];
                
    //             $new_train -> save();
    //         }
    // }
    public function run(Faker $faker){
        for($i=0; $i<20; $i++){
            $new_train = new Train();
            $new_train ->agency = $faker->company;
            $new_train ->departure_station = $faker->city;
            $new_train ->arrival_station = $faker->city;
            $new_train ->departure_time = $faker->dateTimeBetween('+1 day', '+1 week');
            $new_train ->arrival_time = $faker->dateTimeBetween('+2 day', '+2 week');
            $new_train ->train_code = $faker->unique()->randomNumber(4);
            $new_train ->number_of_carriages = $faker->numberBetween(5, 15);
            $new_train ->in_time = $faker->boolean;
            $new_train ->deleted = $faker->boolean;
            $new_train -> save();
        }
    }
}

