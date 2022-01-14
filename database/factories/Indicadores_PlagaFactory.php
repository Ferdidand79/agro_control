<?php

namespace Database\Factories;

use App\Models\Indicadores_Plaga;
use App\Models\Plaga;
use Illuminate\Database\Eloquent\Factories\Factory;

class Indicadores_PlagaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Indicadores_Plaga::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'v_minimo' => $this->faker->randomElement([1, 2, 3]),
            'v_maximo' => $this->faker->randomElement([4, 5, 6]),
            'plaga_id' => Plaga::all()->random()->id,
        ];
    }
}
