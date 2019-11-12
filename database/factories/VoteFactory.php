<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vote;
use Faker\Generator as Faker;

$factory->define(Vote::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 50),
        'idea_id' => factory(App\Idea::class),
        'up' => $faker->boolean()
    ];
});
