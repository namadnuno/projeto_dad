<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(Image::class, function (Faker $faker) {
    return [
        'face' => $faker->sentence(3),
        'active' => true,
        'path' => $faker->image('storage/app/public/uploads',400,300, null, false),
    ];
});
