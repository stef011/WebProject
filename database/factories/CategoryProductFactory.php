<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CategoryProduct;
use Faker\Generator as Faker;

$factory->define(CategoryProduct::class, function (Faker $faker) {
    return [
        'category_id' => factory(App\Category::class),
        'product_id' => factory(App\Product::class)
    ];
});