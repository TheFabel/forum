<?php

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

$factory->define(App\Answer::class, function (Faker $faker) {
    return [
        'text' => $faker->paragraph(random_int(3, 5)),
        'theme_id' => random_int(1, 150000),
//        'theme_id' => 1,
        'date' => time()
    ];
});
