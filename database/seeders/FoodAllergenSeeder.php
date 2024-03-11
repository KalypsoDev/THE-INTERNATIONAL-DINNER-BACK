<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\FoodAllergenFactory;

class FoodAllergenSeeder extends Seeder
{
   
    public function run(): void
    {
        FoodAllergenFactory::new()->count(10)->create();

    }
}
