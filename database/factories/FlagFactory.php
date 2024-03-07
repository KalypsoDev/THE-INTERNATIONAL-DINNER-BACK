<?php

namespace Database\Factories;

use App\Models\Flag;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlagFactory extends Factory
{
    protected $model = Flag::class;

    public function definition()
    {
        return [
            'country_flag' => $this->faker->countryCode,
            
        ];
    }
}
