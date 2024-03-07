<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\FoodAllergen;
use Faker\Generator as Faker;

$factory->define(FoodAllergen::class, function (Faker $faker) {
    return [
        'allergen_type' => $faker->word, 
    ];
});