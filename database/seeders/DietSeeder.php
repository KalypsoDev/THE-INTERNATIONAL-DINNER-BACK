<?php

namespace Database\Seeders;

use App\Models\Diet;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use Database\Factories\DietFactory;

class DietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DietFactory::new()->count(10)->create();

    }
}
