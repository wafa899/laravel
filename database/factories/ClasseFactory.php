<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Classe;
use Faker\Generator as Faker;

$factory->define(Classe::class, function (Faker $faker) {
    return [
        'class_name' =>$faker->userName,
        'created_at' => now(),
        'updated_at' => now(),

        //
    ];
});
