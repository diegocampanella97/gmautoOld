<?php

use App\Preparation;
use Illuminate\Database\Seeder;

class PreparationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $preparationsCars = json_decode(file_get_contents(database_path('custom_resources/cardb_preparations.json')),true);

        foreach(array_chunk($preparationsCars, 1000) as $city)
            Preparation::insert($city);
        }

}
