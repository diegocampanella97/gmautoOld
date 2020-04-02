<?php

use App\Transmission;
use Illuminate\Database\Seeder;

class TransmissionTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transmissionsCars = json_decode(file_get_contents(database_path('custom_resources/cambio-category.json')),true);

        foreach(array_chunk($transmissionsCars, 1000) as $city)
            Transmission::insert($city);
        }
    }

