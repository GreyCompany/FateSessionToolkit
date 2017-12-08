<?php

use Faker\Generator as Faker;

$factory->define(App\Consequence::class, function (Faker $faker) {
    return [
        'name' => $faker->name, 
        'category' => $faker->numberBetween(0,5),
        'type' => $faker->numberBetween(0,5),
    ];
});
