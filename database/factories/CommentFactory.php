<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->text(256),
        'pictureId' => factory(App\Picture::class),
        'userId' => $faker->numberBetween(1, 50),
    ];
});
