<?php

namespace Database\Factories;

use App\Models\Muestra;
use App\Models\Observacion;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ObservacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Observacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'observacion' => $this->faker->paragraph(),
            'lugar' => $this->faker->state(),//[Factory::create('es_PE')]
            'fecha' => $this->faker->dateTime(),
            'estado' => $this->faker->randomElement([Observacion::ACTIVO, Observacion::INACTIVO]),
            'user_id' => User::all()->random()->id,//User::all()->random()->id,
        ];
    }
}
