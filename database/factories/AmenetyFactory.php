<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Amenety;
use Faker\Generator as Faker;

$factory->define(Amenety::class, function (Faker $faker) {
    return [



         'name' => $faker->name


 ];
});
