<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(\App\Character::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence(10)
    ];
});

$factory->define(\App\Comic::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'description' => $faker->sentence(10),
        'edition' => $faker->numberBetween(1,1000),
        'volume' => $faker->numberBetween(1950,2020),
        'serie_id' => 1,
    ];
});

$factory->define(\App\Story::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'description' => $faker->sentence(10),
    ];
});

$factory->define(\App\Event::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'description' => $faker->sentence(10),
    ];
});

$factory->define(\App\Serie::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'description' => $faker->sentence(10),
        'story_id' => 1
    ];
});
