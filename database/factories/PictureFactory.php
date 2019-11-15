<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Picture;
use Faker\Generator as Faker;

$factory->define(Picture::class, function (Faker $faker) {
    return [
        'image' => 'skflsdnlsdnvms.jpg',
        'userId' => $faker->randomNumber,
        'eventId' => factory(App\Event::class)
    ];
});