<?php


namespace Database\Factories;

use App\Models\ProductBill;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductBillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductBill::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => $this->faker->randomNumber(),
            'bill_id' => $this->faker->randomNumber(),
            'sale_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'product_quantity' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
