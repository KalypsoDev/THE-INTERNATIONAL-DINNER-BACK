<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Database\Factories\ProductBillFactory;
use App\Models\ProductBill;


class ProductBillSeeder extends Seeder
{
    public function run()
    {
        ProductBill::factory()->count(10)->create();
    }
}
