<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Absense;
//use App\User;
//use App\Seance;
use Faker\Generator as Faker;

$factory->define(Absense::class, function (Faker $faker) {
    return [

       // 'user_id' => User::get('id')->random(),

        //'id_seance' => Seance::get('id')->random(),
        'date_abs'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'created_at' => now(),
        'updated_at' => now(),


        //
    ];
});
