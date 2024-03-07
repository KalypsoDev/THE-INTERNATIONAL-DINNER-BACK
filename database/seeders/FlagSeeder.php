<?php

namespace Database\Seeders;

use App\Models\Flag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\FlagFactory;

class FlagSeeder extends Seeder
{
    
    public function run(): void
    {
        FlagFactory::new()->count(10)->create();

    }
}
