<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'description' => $faker->paragraph,
        'image' => 'iamanimage',
        'price' => $faker->randomFloat(2, 0, 200),
        'stock' => $faker->numberBetween(1, 50)
    ];
});
