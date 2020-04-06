<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    $v = $faker->vehicleArray();
    return [
//        'name' => $faker->vehicleModel,
//        'category_id' => $faker->numberBetween(2,5),
        'name' => $faker->name,
        'targa' => $faker->vehicleRegistration('[A-Z]{2}[0-9]{3}[A-Z]{2}'),
        'description' => $faker->text(2000),
        'price' => $faker->biasedNumberBetween(1000,900000, 'sqrt'),
        'color_id' => $faker->biasedNumberBetween(1,8, 'sqrt'),
        'vid' => $faker->vin,
        'mouth' => $faker->biasedNumberBetween(1,12, 'sqrt'),
        'year' => $faker->biasedNumberBetween(1998,2020, 'sqrt'),
        'fuel_id' => $faker->biasedNumberBetween(1,7, 'sqrt'),
        'transmission_id' => $faker->biasedNumberBetween(1,4, 'sqrt'),
        'grade_id' => $faker->biasedNumberBetween(1,7, 'sqrt'),
        'seat_id' => $faker->biasedNumberBetween(1,8, 'sqrt'),
        'door_id' => $faker->biasedNumberBetween(1,3, 'sqrt'),
        'preparations_id' => $faker->biasedNumberBetween(1,64435, 'sqrt'),
        'kilometers_id' => $faker->biasedNumberBetween(1,37, 'sqrt'),
        'tipology_id' => $faker->biasedNumberBetween(1,7, 'sqrt'),
        'approved' => 1
    ];
});
