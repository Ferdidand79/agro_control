<?php

namespace Database\Factories;

use App\Models\Muestra;
use App\Models\Planta;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

class MuestraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Muestra::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ubicacion' => $this->faker->state(),//[Factory::create('es_PE')]
            'fecha' => $this->faker->dateTime(),
            'estado' => $this->faker->randomElement([Muestra::ACTIVO, Muestra::INACTIVO]),
            'user_id' =>User::all()->random()->id,//User::all()->random()->id
            'planta_id' => Planta::all()->random()->id,
        ];
    }
}
