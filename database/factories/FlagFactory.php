<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Flag;
use Faker\Generator as Faker;

$factory->define(Flag::class, function (Faker $faker) {
    return [
        'country_flag' => $faker->countryCode, 
    ];
});