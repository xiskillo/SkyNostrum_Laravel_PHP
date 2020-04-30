<?php

use Faker\Generator as Faker;

$factory->define(skynostrum\Productos::class, function (Faker $faker) {
    return [
        //
        'codigo'=> $faker->randomDigit,
        'nombre'=> $faker->name,
        'stock'=> $faker->randomDigit,
        'precio'=> $faker->randomDigit,
        'attachment'=> \Faker\Provider\Image::image(storage_path().'/app/productos',200,200,'technics',false),
    ];
});
