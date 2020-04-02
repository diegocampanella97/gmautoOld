<?php

use App\Door;
use Illuminate\Database\Seeder;

class DoorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exemplariesCars = json_decode(file_get_contents(database_path('custom_resources/porte-model.json')),true);

        foreach(array_chunk($exemplariesCars, 1000) as $city){
            Door::insert($city);
        }
    }
}
