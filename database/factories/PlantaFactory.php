<?php

namespace Database\Factories;

use App\Models\Planta;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlantaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Planta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_comun' => $this->faker->sentence(),
            'nombre_cientifico' => $this->faker->sentence(),
            'descripcion' => $this->faker->paragraph(),
        ];
    }
}
