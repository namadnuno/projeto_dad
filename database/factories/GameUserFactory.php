<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(GameUser::class, function (Faker $faker) {
    return [
        'game_id' => function () {
        	return factory(Game::class)->create()->id;
        },
        'user_id' => function () {
        	return factory(User::class)->create()->id;
        }
    ];
});
