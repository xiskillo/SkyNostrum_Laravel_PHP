<?php

use Faker\Generator as Faker;

$factory->define(skynostrum\Clientes::class, function (Faker $faker) {
    return [
        //
        'nombre'=> $faker->name,
        'apellidos'=> $faker->lastname,
        'direccion'=> $faker->address,
        'ciudad'=> $faker->city,
        'cp'=> $faker->numberBetween($min=1,$max=99999),
        
    ];
});
