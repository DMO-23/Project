<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Vinil;
use Faker\Generator as Faker;

$factory->define(Vinil::class, function (Faker $faker) {
    return [
        'nombre' =>$faker->name,
        'texto'  =>$faker->text($maxNbChars = 200),
        'precio'    =>$faker->numberBetween($min = 1000, $max = 9000),
        'clave'    =>$faker->ean8,
        'expiracion'  =>\Carbon\Carbon::now()->format('Y-m-d'),
    ];
});
