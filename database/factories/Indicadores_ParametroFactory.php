<?php

namespace Database\Factories;

use App\Models\Indicadores_Parametro;
use App\Models\Parametro;
use App\Models\Unidad;
use Illuminate\Database\Eloquent\Factories\Factory;

class Indicadores_ParametroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Indicadores_Parametro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'v_minimo' => $this->faker->randomElement([10, 20, 30]),
            'v_maximo' => $this->faker->randomElement([40, 50, 60]),
            'parametro_id' => Parametro::all()->random()->id,
            'unidad_id' => Unidad::all()->random()->id,
        ];
    }
}
