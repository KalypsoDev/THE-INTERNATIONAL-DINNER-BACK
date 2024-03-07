<?php

namespace Database\Seeders;

use App\Models\FoodAllergen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodAllergenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FoodAllergen::factory()->count(50)->create();
    }
}
