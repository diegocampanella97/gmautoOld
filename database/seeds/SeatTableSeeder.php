<?php

use App\Seat;
use Illuminate\Database\Seeder;

class SeatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exemplariesCars = json_decode(file_get_contents(database_path('custom_resources/posti-model.json')),true);

        foreach(array_chunk($exemplariesCars, 1000) as $city){
            Seat::insert($city);
        }
    }
}
