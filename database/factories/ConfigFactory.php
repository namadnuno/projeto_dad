<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(Config::class, function (Faker $faker) {
    return [
        'platform_email' => 'nunnomalex@gmail.com',
        'platform_email_properties' => '',
        'img_base_path' => storage_path('app/public/uploads')
    ];
});
