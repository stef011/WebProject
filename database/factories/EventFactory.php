<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->text,
        'recurrent' => $faker->boolean(50),
        'price' =>  0,
        'illustration' => 'iamapicture'
    ];
});
