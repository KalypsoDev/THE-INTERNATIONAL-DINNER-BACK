<?php

namespace Database\Seeders;

use App\Models\Bill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\BillFactory;



class BillSeeder extends Seeder
{

    public function run(): void
    {
        BillFactory::new()->count(10)->create();

    }
}
