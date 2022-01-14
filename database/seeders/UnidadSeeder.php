<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unidad;

class UnidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unidad::create([
            'nombre_unidad' => 'Mililitros',
            'abreviatura' => 'ml'
        ]);

        Unidad::create([
            'nombre_unidad' => 'Centimetros',
            'abreviatura' => 'cm'
        ]);

        Unidad::create([
            'nombre_unidad' => 'Metros',
            'abreviatura' => 'm'
        ]);

        Unidad::create([
            'nombre_unidad' => 'Pulgadas',
            'abreviatura' => 'pg'
        ]);

        Unidad::create([
            'nombre_unidad' => 'Libras',
            'abreviatura' => 'lb'
        ]);

        Unidad::create([
            'nombre_unidad' => 'Kilos',
            'abreviatura' => 'kl'
        ]);

        Unidad::create([
            'nombre_unidad' => 'Gramo',
            'abreviatura' => 'gm'
        ]);
    }
}
