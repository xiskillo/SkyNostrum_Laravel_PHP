<?php

use Faker\Generator as Faker;

$factory->define(skynostrum\Ventas::class, function (Faker $faker) {
    return [
        //
        'clientes_id'=>\skynostrum\Clientes::all()->random(),
        'productos_id'=>\skynostrum\Productos::all()->random(),
       'clientes_id'=> $faker->randomDigit,
       'productos_id'=>$faker->randomDigit,
        'cantidad'=> $faker->randomDigit,
        'observaciones'=> $faker->text,
        
    ];
});
