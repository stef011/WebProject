<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Like;
use Faker\Generator as Faker;

$factory->define(Like::class, function (Faker $faker) {
    return [
        'picture_id' => factory(App\Picture::class),
        'user_id' => $faker->numberBetween(0, 50)
    ];
});
