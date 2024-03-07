<?php
namespace Database\Factories;

use App\Models\Bill;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class BillFactory extends Factory
{
    protected $model = Bill::class;

    public function definition()
    {
        return [
            'user_id' => function () {
                return User::factory()->create()->id;
            },
            'units_quantity' => $this->faker->randomNumber(2),
            'total_sale_price' => $this->faker->randomFloat(2, 10, 1000),
            'status' => $this->faker->randomElement(['activo', 'inactivo']),
        ];
    }
}
