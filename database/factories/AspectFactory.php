<?php

use Faker\Generator as Faker;

$factory->define(App\Aspect::class, function (Faker $faker) {
    return [
        'name' => $faker->name, 
        'category' => $faker->name,
        'type'=> $faker->name
    ];
});
