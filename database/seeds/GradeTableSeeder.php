<?php

use App\Grade;
use Illuminate\Database\Seeder;

class GradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exemplariesCars = json_decode(file_get_contents(database_path('custom_resources/grade-category.json')),true);

        foreach(array_chunk($exemplariesCars, 1000) as $city){
            Grade::insert($city);
        }
    }
}
