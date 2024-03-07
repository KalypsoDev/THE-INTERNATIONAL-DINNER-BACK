<?php

namespace Database\Factories;

use App\Models\FoodAllergen;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoodAllergenFactory extends Factory
{
    protected $model = FoodAllergen::class;

    public function definition()
    {
        return [
            'allergen_type' => $this->faker->word,
            
        ];
    }
}
