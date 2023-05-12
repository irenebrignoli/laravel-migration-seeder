<?php

namespace Database\Seeders;

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
            $train->code = $faker->randomNumber(8, true);
            $train->in_time = $faker->randomElement(['yes', 'no']);
            $train->confirmed = $faker->randomElement(['yes', 'no']);
            $train->save();
        }
    }
}
