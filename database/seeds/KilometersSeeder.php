<?php

use App\Kilometers;
use Illuminate\Database\Seeder;

class KilometersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exemplariesCars = json_decode(file_get_contents(database_path('custom_resources/kilometers.json')),true);

        foreach(array_chunk($exemplariesCars, 1000) as $city){
            Kilometers::insert($city);
        }
    }
}
