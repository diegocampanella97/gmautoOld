<?php

use App\Exemplary;
use Illuminate\Database\Seeder;

class ExemplariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exemplariesCars = json_decode(file_get_contents(database_path('custom_resources/cardb_exemplaries.json')),true);

        foreach(array_chunk($exemplariesCars, 1000) as $city)
            Exemplary::insert($city);
        }

}
