<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => "bilal",
        'email' => "bilal@yahoo.com",
        'email_verified_at' => now(),
        'password' => encrypt('123456'), // secret
        'remember_token' => Str::random(10),
    ];
});


$factory->define(App\Lesson::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'body' => $faker->paragraph(5),
        'some_bool' => $faker->boolean
    ];
});
