<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Flag;
use App\Models\Diet;
use App\Models\FoodAllergen;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->sentence(3),
            'product_image_url' => $this->faker->imageUrl(),
            'product_description' => $this->faker->paragraph,
            'product_price' => $this->faker->randomFloat(2, 10, 1000),
            'flag_id' => function () {
                return Flag::factory()->create()->id;
            },
            'diet_id' => function () {
                return Diet::factory()->create()->id;
            },
            'allergen_type' => function () {
                return FoodAllergen::factory()->create()->id;
            },
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
