<?php

use App\Car;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = (factory(Car::class, 5000)->make())->toArray();

        $chunks = array_chunk($cars,1000);

        foreach ($chunks as $chunk){
            Car::insert($chunk);
        }

    }
}
