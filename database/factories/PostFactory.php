<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'author_id' => 1,
        'title' => $faker->text(30),
        'content' => $faker->text(250)
    ];
});
