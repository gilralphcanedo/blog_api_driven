<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'post_id' => 1,
        'content' => $faker->text(20),
        'author_id' => 1
    ];
});