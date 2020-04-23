<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'author' => $faker->name,
        'title' => $faker->sentence,
        'excerpt' => $faker->paragraph,
        'pages' => $faker->unique()->randomNumber($nbDigits = 3)
    ];
});
