<?php

namespace Database\Factories;

use App\Models\Charge;
use App\Models\DocType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'doctype_id' => DocType::factory(),
            'ci' => $this->faker->numerify('##########'),
            'name' => Str::random(10),
            'lastname' => Str::random(10),
            'email' => $this->faker->unique()->safeEmail(),
            'url' => Str::random(10),
            'charge_id' => Charge::factory(),
            'created_by' => User::factory(),
        ];
    }
}
