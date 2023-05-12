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
            $train->departure_time = $faker->time();
            $train->departure_date = $faker->date('Y_m_d');
            $train->arrival_time = $faker->time();
            $train->arrival_date = $faker->date('Y_m_d');
            $train->code = $faker->randomNumber(6, true);
            $train->wagon = $faker->randomNumber(2, true);
            $train->in_time = $faker->randomElement(['yes', 'no']);
            $train->confirmed = $faker->randomElement(['yes', 'no']);
            $train->save();
        }
    }
}
