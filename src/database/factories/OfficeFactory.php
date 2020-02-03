<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Office;
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

$factory->define(Office::class, function (Faker $faker) {
    return [
        'office_number' => $faker->numberBetween(
            $min = 1,
            $max = 999
        ),
        'office_name' => $faker->lastKanaName . '事業所',
        // 'category_id' => '4',
        'address' => $faker->address,
        'phone_number' => $faker->phoneNumber,
        'fax_number' => $faker->phoneNumber,
        'email' => $faker->randomElement([
            $faker->companyEmail,
            null,
        ]),
        'url' => $faker->url,
        'photo_path' => null,
        'votes' => $faker->numberBetween(0, 10),
    ];
});
