<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
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

$factory->define(Category::class, function (Faker $faker) {
    return [
        'code' => $faker->numerify('###'),
        'category_name' => $faker->randomElement([
            '就労移行支援',
            '居宅介護',
            '共同生活援助',
        ]),
    ];
});
