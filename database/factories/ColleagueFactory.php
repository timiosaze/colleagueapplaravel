<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Colleague;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Colleague::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'body' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'rating' => $faker->randomElement($array = array (1.0,2.0,3.0,4.0,5.0))
    ];
});
