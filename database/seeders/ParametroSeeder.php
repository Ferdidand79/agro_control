<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametro;

class ParametroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parametro::create([
            'nombre_parametro' => 'Altura',
            'descripcion' => 'Se toma la longitud desde el punto decorte hasta la terminacion'
        ]);

        Parametro::create([
            'nombre_parametro' => 'Grosor tallo',
            'descripcion' => 'La longitud del diametro del tallo'
        ]);

        Parametro::create([
            'nombre_parametro' => 'PH almacenado',
            'descripcion' => 'Se calcula en base a los decilitros por miligramo cubico de raiz'
        ]);

        Parametro::create([
            'nombre_parametro' => 'Germinacion',
            'descripcion' => 'El tiempo desde elentierro de la semilla, hasta su brote'
        ]);

        Parametro::create([
            'nombre_parametro' => 'Area folear',
            'descripcion' => 'El índice de área de la hoja es una cantidad adimensional que caracteriza la canopia de las plantas'
        ]);

        Parametro::create([
            'nombre_parametro' => 'Nutricion',
            'descripcion' => 'La nutrición vegetal es el conjunto de procesos mediante los cuales los vegetales toman sustancias del exterior para sintetizar sus componentes celulares o usarlas como fuente de energía'
        ]);

        Parametro::create([
            'nombre_parametro' => 'PH almacenado',
            'descripcion' => 'Se calcula en base a los decilitros por miligramo cubico de raiz'
        ]);

        Parametro::create([
            'nombre_parametro' => 'Estres hidrico',
            'descripcion' => 'Se habla de estrés hídrico cuando la demanda de agua es más alta que la cantidad disponible durante un periodo determinado o cuando su uso se ve restringido por su baja calidad'
        ]);
    }
}
