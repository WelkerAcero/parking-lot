<?php

namespace Database\Seeders;

use App\Models\DocType;
use Illuminate\Database\Seeder;

class DocTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $docTypes = array('TI', 'CC', 'RC', 'CE', 'NIP', 'NUIP');

        for ($i = 0; $i < count($docTypes); $i++) {
            $docType[$i] = new DocType();
            $docType[$i]->name = $docTypes[$i];
            $docType[$i]->save();
        }
    }
}
