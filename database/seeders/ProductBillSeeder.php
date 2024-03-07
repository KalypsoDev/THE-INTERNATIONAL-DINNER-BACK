<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\ProductBillFactory;


class ProductBillSeeder extends Seeder
{
    public function run()
    {
        ProductBillFactory::factory()->count(10)->create();
    }
}

