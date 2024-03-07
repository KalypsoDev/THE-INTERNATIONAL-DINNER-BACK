<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\ProductBill;
use App\Models\Product;
use App\Models\Bill;
use Faker\Generator as Faker;

$factory->define(ProductBill::class, function (Faker $faker) {
    return [
        'product_id' => function () {
            return factory(Product::class)->create()->id;
        },
        'bill_id' => function () {
            return factory(Bill::class)->create()->id;
        },
        'sale_date' => $faker->dateTimeBetween('-1 year', 'now'),
        'product_quantity' => $faker->numberBetween(1, 10),
        'price' => $faker->randomFloat(2, 10, 1000),
       
    ];
});