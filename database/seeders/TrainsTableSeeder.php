<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
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
        for($i=0; $i<20; $i++){
            $train = new Train();
            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->date();
            $train->arrival_time = $faker->date();
            $train->train_code = $faker->randomNumber(5, true);
            $train->wagons_number = $faker->randomNumber(2, true);
            $train->on_time = $faker->numberBetween(0, 1);
            $train->cancelled = $faker->numberBetween(0, 1);
            $train->save();
        }

        $csv = Helpers::getCsvContent(__DIR__ . '/trains.csv');

        foreach($csv as $index=>$row){
            if($index >0){
                $newTrain = new Train();
                $newTrain->company = $row[0];
                $newTrain->departure_station = $row[1];
                $newTrain->arrival_station = $row[2];
                $newTrain->departure_time = $row[3];
                $newTrain->arrival_time = $row[4];
                $newTrain->train_code = $row[5];
                $newTrain->wagons_number = $row[6];
                $newTrain->on_time = $row[7];
                $newTrain->cancelled = $row[8];
                $newTrain->save();
            }
    
        }

        
    }
}
