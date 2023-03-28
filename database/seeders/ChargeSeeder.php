<?php

namespace Database\Seeders;

use App\Models\Charge;
use Illuminate\Database\Seeder;

class ChargeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $charges = array('Visitantes', 'Profesor', 'Administrativo', 'CallCenter', 'Limpieza', 'Secretaria', 'Director', 'Decano', 'Bienestar Institucional', 'Bibliotecari@s', 'Rector', 'Biserector', 'Coordinadores');

        for ($i = 0; $i < count($charges); $i++) {
            $charge[$i] = new Charge();
            $charge[$i]->name = $charges[$i];
            $charge[$i]->save();
        }
    }
}
