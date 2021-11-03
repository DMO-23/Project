<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\ProveedorModel;
use Faker\Generator as Faker;

$factory->define(ProveedorModel::class, function (Faker $faker) {
    return [
        'razonSocial' => $faker->word,
        'nombreCompleto' => $faker->name,
        'direccion' => $faker->address,
        'telefono' => $faker->phoneNumber,
        'correo' => $faker->unique()->safeEmail,
        'rfc' => $faker->text(13),
    ];
});
