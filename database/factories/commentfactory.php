<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\comment;
use Faker\Generator as Faker;

$factory->define(comment::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'user_comments' => $faker->paragraph(4),
    ];
});
