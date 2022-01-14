<?php

namespace Database\Factories;

use App\Models\Indice_parametro;
use App\Models\Parametro;
use App\Models\Unidad;
use Illuminate\Database\Eloquent\Factories\Factory;

class Indice_parametroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Indice_parametro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'valor' => $this->faker->randomElement([10, 11, 15, 20, 26, 27, 30, 32, 40, 48, 50, 51, 60]),
            'parametro_id' => Parametro::all()->random()->id,
            'unidad_id' => Unidad::all()->random()->id,
        ];
    }
}
