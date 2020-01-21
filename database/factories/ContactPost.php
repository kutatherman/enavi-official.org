<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ContactPost;
use Faker\Generator as Faker;

$factory->define(ContactPost::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->randomNumber('8'),
        'msg' => $faker->paragraph(),
    ];
});
