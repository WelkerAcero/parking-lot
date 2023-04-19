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
        /*         return [
            'doctype_id' => 2,
            'ci' => $this->faker->numerify('##########'),
            'name' => Str::random(10),
            'lastname' => Str::random(10),
            'email' => $this->faker->unique()->safeEmail(),
            'cellphone' => $this->faker->numerify('##########'),
            'url' => Str::random(10),
            'charge_id' => 1,
            'created_by' => User::factory(),
        ]; */
    }
}
