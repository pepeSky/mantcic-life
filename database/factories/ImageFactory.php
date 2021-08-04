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
            'url' => 'services/' . $this->faker->image('storage/app/public/services', 640, 480, null, false),

            'url' => 'products/' . $this->faker->image('storage/app/public/stores/products', 640, 480, null, false),
        ];
    }
}
