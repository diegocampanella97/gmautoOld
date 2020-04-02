<?php

use App\Typology;
use Illuminate\Database\Seeder;

class TypologyTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typologysCars = json_decode(file_get_contents(database_path('custom_resources/car-typology.json')),true);

        foreach(array_chunk($typologysCars, 1000) as $city)
            Typology::insert($city);
    }
}

