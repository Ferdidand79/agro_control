<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => 'observaciones'. $this->faker->image('public/storage/observaciones', 640, 480, null, false),//'public/storage/observaciones'
            //'imageable_id' => null,
            //'imageable_type' => null,
        ];
    }
}
