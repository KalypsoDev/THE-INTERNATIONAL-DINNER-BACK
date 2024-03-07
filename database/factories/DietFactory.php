<?php

namespace Database\Factories;


use App\Models\Diet;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class DietFactory extends Factory
{
    protected $model = Diet::class;

    public function definition()
    {
        return [
            'diet_type' => $this->faker->randomElement(['low-carb', 'keto', 'paleo', 'vegan', 'vegetarian', 'gluten-free']),
            
        ];
    }
}
