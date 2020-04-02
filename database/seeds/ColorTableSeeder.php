<?php

use App\Color;
use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exemplariesCars = json_decode(file_get_contents(database_path('custom_resources/color-model.json')),true);

        foreach(array_chunk($exemplariesCars, 1000) as $city){
            Color::insert($city);
        }
    }
}
