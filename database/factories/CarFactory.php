<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    $v = $faker->vehicleArray();
    return [
        'name' => $faker->vehicleModel,
        'category_id' => $faker->numberBetween(2,5),
    ];
});
