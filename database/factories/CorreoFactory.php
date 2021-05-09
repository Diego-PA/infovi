<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Correo;
use Faker\Generator as Faker;

$factory->define(Correo::class, function (Faker $faker) {
    return [
        'correo' => $faker->unique()->safeEmail(),
        'estado' => $faker->boolean(),
    ];
});
