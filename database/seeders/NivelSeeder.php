<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nivel;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nivel::create([
            'nombre_nivel' => 'Bajo'
        ]);

        Nivel::create([
            'nombre_nivel' => 'Medio'
        ]);

        Nivel::create([
            'nombre_nivel' => 'Alto'
        ]);
    }
}
