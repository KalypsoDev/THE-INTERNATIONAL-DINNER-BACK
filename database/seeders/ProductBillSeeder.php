<?php

namespace Database\Seeders;

use App\Models\ProductBill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductBillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductBill::factory()->count(50)->create();
    }
}
