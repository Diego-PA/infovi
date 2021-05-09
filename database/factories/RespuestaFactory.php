<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Respuesta;
use Faker\Generator as Faker;
use App\Correo;

$factory->define(Respuesta::class, function (Faker $faker) {
    return [
        //
    ];
});

$factory->state(Respuesta::class, 'alta', function (Faker $faker) {

    $correos = App\Correo::all();

    return [
        'genero' => $faker->randomElement($array = array ('M','F')),
        'contacto' => $faker->boolean(),
        'fiebre'  => $faker->boolean(),
        'tos'  => $faker->boolean(),
        'dificultad_respiratoria'  => $faker->boolean(),
        'dolor_pecho'  => $faker->boolean(),
        'dolor_cabeza'  => $faker->boolean(),
        'escurrimiento'  => $faker->boolean(),
        'dolor_muscular'  => $faker->boolean(),
        'diarrea' => $faker->boolean(),
        'id_diagnostico' => '1',
        'id_correo'  => $faker->randomElement($correos)->id,
    ];
});

$factory->state(Respuesta::class, 'media', function (Faker $faker) {

    $correos = App\Correo::all();

    return [
        'genero' => $faker->randomElement($array = array ('M','F')),
        'contacto' => $faker->boolean(),
        'fiebre'  => $faker->boolean(),
        'tos'  => $faker->boolean(),
        'dificultad_respiratoria'  => $faker->boolean(),
        'dolor_pecho'  => $faker->boolean(),
        'dolor_cabeza'  => $faker->boolean(),
        'escurrimiento'  => $faker->boolean(),
        'dolor_muscular'  => $faker->boolean(),
        'diarrea' => $faker->boolean(),
        'id_diagnostico' => '2',
        'id_correo'  => $faker->randomElement($correos)->id,
    ];
});

$factory->state(Respuesta::class, 'baja', function (Faker $faker) {

    $correos = App\Correo::all();

    return [
        'genero' => $faker->randomElement($array = array ('M','F')),
        'contacto' => $faker->boolean(),
        'fiebre'  => $faker->boolean(),
        'tos'  => $faker->boolean(),
        'dificultad_respiratoria'  => $faker->boolean(),
        'dolor_pecho'  => $faker->boolean(),
        'dolor_cabeza'  => $faker->boolean(),
        'escurrimiento'  => $faker->boolean(),
        'dolor_muscular'  => $faker->boolean(),
        'diarrea' => $faker->boolean(),
        'id_diagnostico' => '3',
        'id_correo'  => $faker->randomElement($correos)->id,
    ];
});