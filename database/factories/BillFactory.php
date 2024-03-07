<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Bill;
use App\Models\User; 
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
$factory->define(Bill::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            
            return User::factory()->create()->id;
        },
        'units_quantity' => $faker->randomNumber(2),
        'total_sale_price' => $faker->randomFloat(2, 10, 1000),
        'status' => $faker->randomElement(['activo', 'inactivo']),
    ];
});