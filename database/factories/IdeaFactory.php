<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Idea;
use Faker\Generator as Faker;

$factory->define(Idea::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'description' => $faker->paragraph,
        'userId' => $faker->numberBetween(1, 50)
    ];
});