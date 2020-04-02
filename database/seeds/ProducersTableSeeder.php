<?php

use App\Producer;
use Illuminate\Database\Seeder;

class ProducersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produttoreCars = json_decode(file_get_contents(database_path('custom_resources/cardb_producers.json')),true);

        foreach(array_chunk($produttoreCars, 1000) as $city)
            Producer::insert($city);
        }

}
