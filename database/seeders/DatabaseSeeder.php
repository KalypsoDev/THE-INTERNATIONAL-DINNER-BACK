<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Flag;
use App\Models\FoodAllergen;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            BillSeeder::class,
            DietSeeder::class,
            FlagSeeder::class,
            FoodAllergenSeeder::class,
            ProductBillSeeder::class,
            ProductSeeder::class,
            
        ]);
    }
}
