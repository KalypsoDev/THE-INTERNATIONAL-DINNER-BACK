<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Product;
use App\Models\Flag;
use App\Models\Diet;
use App\Models\FoodAllergen;

use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'product_name' => $faker->sentence(3),
        'product_image_url' => $faker->imageUrl(),
        'product_description' => $faker->paragraph,
        'product_price' => $faker->randomFloat(2, 10, 1000),
        'flag_id' => function () {
            return factory(Flag::class)->create()->id;
        },
        'diet_id' => function () {
            return factory(Diet::class)->create()->id;
        },
        'allergen_type' => function () {
            return factory(FoodAllergen::class)->create()->allergen_type;
        },
        'status' => $faker->randomElement(['active', 'inactive']),
        
    ];
});