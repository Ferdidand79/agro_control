<?php

namespace Database\Seeders;

use App\Models\Indicadores_parametro;
use App\Models\Indicadores_plaga;
use Illuminate\Database\Seeder;
use App\Models\Planta;

class PlantaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Planta::create([
            'nombre_comun' => 'Sacha Inchi',
            'nombre_cientifico' => 'Dibterias Marcianus Sinchetos',
            'decripcion' => 'Planta con hojas redondeadas de tallo aplaucible'
        ]);

        Planta::create([
            'nombre_comun' => 'Malva',
            'nombre_cientifico' => 'Planta Malvácea medicinal',
            'decripcion' => 'Flores violaceas con hojas punteagudas.'
        ]);

        Planta::create([
            'nombre_comun' => 'Sábila',
            'nombre_cientifico' => 'Aloe',
            'decripcion' => 'planta liliácea de cuyas ojas se extrae un jugo que se emplea en medicinas, productos cosmeticos de belleza.'
        ]);

        Planta::create([
            'nombre_comun' => 'Paico',
            'nombre_cientifico' => 'Paicopterias norbibus carnicias',
            'decripcion' => 'Planta de hojas y delgadas que terminan en punta.'
        ]);

        Planta::create([
            'nombre_comun' => 'Matico',
            'nombre_cientifico' => 'Maticus sinopterius',
            'decripcion' => 'El matico es una planta cosmopolita de la familia de la pimienta (Piperaceae) de aproximadamente 3 metros de altura que crece en la costa, selva alta y baja y en los valles interandinos de la sierra'
        ]);

        Planta::create([
            'nombre_comun' => 'Chanca piedra',
            'nombre_cientifico' => 'Bellecius chancacuy piedris',
            'decripcion' => 'Es una planta natural q sirve para la prevencion y tratamiento de piedras (calculos) en el sistema urologico.'
        ]);*/

        $plantas = Planta::factory(40)->create();

        foreach ($plantas as $planta) {
            Indicadores_plaga::factory(10)->create([
                'planta_id' => $planta->id
            ]);

            Indicadores_parametro::factory(10)->create([
                 'planta_id' => $planta->id
            ]);

        }
    }
}
