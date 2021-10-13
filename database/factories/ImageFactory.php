<?php

namespace Database\Factories;

use App\Models\Mantenance\Image;
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
            'url' => 'public/storage/web/services' . $this->faker->image('services', 640, 480, null, false),

            'url' => 'public/storage/stores/products' . $this->faker->image('products', 640, 480, null, false),

        ];
    }
}
