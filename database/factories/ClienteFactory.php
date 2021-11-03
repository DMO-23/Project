<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\ClienteModel;
use Faker\Generator as Faker;

$factory->define(ClienteModel::class, function (Faker $faker) {
    return [
             'nombre' =>$faker->name,
             'apellidoPaterno'  =>$faker->firstname,
             'apellidoMaterno'  =>$faker->firstname,
             'rfc'     =>$faker->text(13),
             'telefono'    =>$faker->phoneNumber,
             'correo'     =>$faker->safeEmail,
             'direccion'    =>$faker->address,
             //'idProducto'     =>$faker->numberBetween(1, 20),
    ];
});
