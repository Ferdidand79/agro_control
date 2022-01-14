<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Indice_parametro;
use App\Models\Indice_plaga;
use App\Models\Muestra;
use App\Models\Observacion;
use Illuminate\Database\Seeder;

class MuestraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $muestras = Muestra::factory(40)->create();

        foreach ($muestras as $muestra) {
            $observaciones = Observacion::factory(10)->create([
                'muestra_id' => $muestra->id
                ]);

            foreach ($observaciones as $observacion) {
                Image::factory(1)->create([
                    'imageable_id' => $observacion->id,
                    'imageable_type' => 'App\Models\Observacion'
                ]);

                Indice_plaga::factory(1)->create([
                    'observacion_id' => $observacion->id,
                ]);

                Indice_parametro::factory(6)->create([
                    'observacion_id' => $observacion->id,
                ]);
            }
        }
    }
}
