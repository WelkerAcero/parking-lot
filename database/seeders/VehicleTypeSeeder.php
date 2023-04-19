<?php

namespace Database\Seeders;

use App\Models\VehicleType;
use Illuminate\Database\Seeder;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $typeEngines = array('Carro', 'Moto', 'Camioneta', 'Furgoneta', 'Carro Deportivo');

        for ($i = 0; $i < count($typeEngines); $i++) {
            $types[$i] = new VehicleType();
            $types[$i]->name = $typeEngines[$i];
            $types[$i]->save();
        }
    }
}
