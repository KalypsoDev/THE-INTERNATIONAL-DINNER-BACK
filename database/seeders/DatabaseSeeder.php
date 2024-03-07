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
            FlagSeeder::class,
            DietSeeder::class,
            FoodAllergenSeeder::class,
            RoleSeeder::class, 
            ProductSeeder::class,
            UserSeeder::class,
            BillSeeder::class,
            ProductBillSeeder::class,
            
            
        ]);
    }
}
