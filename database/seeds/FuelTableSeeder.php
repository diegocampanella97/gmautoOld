<?php

use App\Fuel;
use Illuminate\Database\Seeder;

class FuelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exemplariesCars = json_decode(file_get_contents(database_path('custom_resources/fuel-model.json')),true);

        foreach(array_chunk($exemplariesCars, 1000) as $city){
            Fuel::insert($city);
        }
    }
}
