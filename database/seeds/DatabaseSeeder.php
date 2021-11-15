<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(CarsTableSeeder::class);
        $this->call([
            ProducersTableSeeder::class,
            ExemplariesTableSeeder::class,
            PreparationsTableSeeder::class,
            TransmissionTableSeed::class,
            TypologyTableSeed::class,
            ColorTableSeeder::class,
            FuelTableSeeder::class,
            GradeTableSeeder::class,
            KilometersSeeder::class,
            DoorTableSeeder::class,
            SeatTableSeeder::class,
            CarsTableSeeder::class,
        ]);
    }
}
