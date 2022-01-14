<?php

namespace Database\Factories;

use App\Models\Indice_plaga;
use App\Models\Nivel;
use App\Models\Plaga;
use Illuminate\Database\Eloquent\Factories\Factory;

class Indice_plagaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Indice_plaga::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'valor' => $this->faker->randomElement([1, 2, 3, 4, 5, 6]),
            'plaga_id' => Plaga::all()->random()->id,
            'nivel_id' => Nivel::all()->random()->id,
        ];
    }
}
