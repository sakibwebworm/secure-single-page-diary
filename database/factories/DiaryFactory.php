<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Diary::class, function (Faker $faker) {
    return [
        'title'=> $faker->sentence(4),
        'entry'=>$faker->sentence(10),
        'user_id'=>1,
    ];
});
