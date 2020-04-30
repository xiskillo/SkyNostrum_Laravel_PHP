<?php

use Faker\Generator as Faker;

$factory->define(skynostrum\Noticias::class, function (Faker $faker) {
    return [
        //
        'user_id'=>\skynostrum\User::all()->random(),
        'titulo'=> $faker->sentence,
        'contenido'=> $faker->text,
        'attachment'=> \Faker\Provider\Image::image(storage_path().'/app/noticias',200,200,'abstract',false),
    ];
});
