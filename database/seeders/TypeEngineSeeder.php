<?php

namespace Database\Seeders;

use App\Models\TypeEngine;
use Illuminate\Database\Seeder;

class TypeEngineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeEngine::factory()->count(3)->create();
    }
}