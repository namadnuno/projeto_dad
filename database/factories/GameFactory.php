<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(Game::class, function (Faker $faker) {
    return [
        'type' => 'singleplayer',
        'status' => 'pending',
       	'total_players' => 1,
       	'created_by' => function () {
       		return factory(User::class)->create()->id;
       	},
        'winner' => null
    ];
});
