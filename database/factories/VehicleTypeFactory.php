<?php

namespace Database\Factories;

use Database\Seeders\VehicleSeeder;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Carro',
        ];
    }
}
