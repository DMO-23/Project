<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\ProductoModel;
use Faker\Generator as Faker;

$factory->define(ProductoModel::class, function (Faker $faker) {
    return [
        'nombre'   =>$faker->word,
        'descripcion'    =>$faker->text,
        'precio'    =>$faker->randomDigit(2, 5),
        'expiracion'     =>\Carbon\Carbon::now()->format('Y-m-d'),
        'stoke'     =>$faker->numberBetween(1, 500),
       // 'idProveedor'    =>$faker->numberBetween(1, 40),
        
    ];
});
