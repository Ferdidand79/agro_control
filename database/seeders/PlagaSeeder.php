<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plaga;

class PlagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plaga::create([
            'nombre_plaga' => 'Gusanos del suelo',
            'descripcion' => 'Tres especies: gusanos blancos, gusanos grises y gusanos de alambre son las larvas de diferentes escarabajos.'
        ]);

        Plaga::create([
            'nombre_plaga' => 'Pulgón',
            'descripcion' => 'Insectos que tienen el aspecto de granos de arroz. Los hay negros, amarillos, verdes o blancos, diferentes especies.'
        ]);
        Plaga::create([
            'nombre_plaga' => 'Cochinillas',
            'descripcion' => 'Son insectos que poseen una especie de coraza o costra que los protege de los insecticidas. Hay muchas especies, tipo caspilla o bolitas de algodón.'
        ]);

        Plaga::create([
            'nombre_plaga' => 'Araña roja',
            'descripcion' => 'Son ácaros difíciles de ver a simple vista, con una lupa sí.'
        ]);

        Plaga::create([
            'nombre_plaga' => 'Trips',
            'descripcion' => 'Son insectos diminutos de color negro o amarillo, como una pequeña tijereta. Producen manchas blancas y pálidas en pétalos y hojas.'
        ]);

        Plaga::create([
            'nombre_plaga' => 'Mosca blanca',
            'descripcion' => 'Se trata de "mosquitas" blancas de pocos milímetros. Chupan la savia de las hojas. Provocan daños similares a los producidos por los pulgones. Suelen ocultarse en el envés de las hojas.'
        ]);
        Plaga::create([
            'nombre_plaga' => 'Orugas',
            'descripcion' => 'Son larvas de mariposas. Devoran hojas y tallos. Detectadas a tiempo pueden eliminarse a mano si se trata de plantas pequeñas y fáciles de examinar, o bien con productos insecticidas específicos.'
        ]);

        Plaga::create([
            'nombre_plaga' => 'Escarabajos y saltamontes',
            'descripcion' => 'Devoran hojas y flores. Suelen ser muy fáciles de detectar y muy destructivos si no se eliminan a tiempo. Lo mejor es eliminarlos a mano, o usar insecticidas específicos.'
        ]);
    }
}
