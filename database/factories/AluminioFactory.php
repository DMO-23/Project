<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Aluminio;
use Faker\Generator as Faker;

$factory->define(Aluminio::class, function (Faker $faker) {
        return [
            'nombre' =>$faker->name,
            'texto'  =>$faker->text($maxNbChars = 200),
            'precio'    =>$faker->numberBetween($min = 1000, $max = 9000),
            'clave'    =>$faker->ean8,
    ];
});
