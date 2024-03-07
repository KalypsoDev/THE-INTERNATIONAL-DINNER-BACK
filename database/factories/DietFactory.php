<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Diet;
use Faker\Generator as Faker;

$factory->define(Diet::class, function (Faker $faker) {
    return [
        'diet_type' => $faker->randomElement(['low-carb', 'keto', 'paleo', 'vegan', 'vegetarian', 'gluten-free']),

    ];
});