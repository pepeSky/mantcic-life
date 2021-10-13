<?php

namespace Database\Factories;

use App\Models\GestionPpSky\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubcategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subcategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => 'subcategories' . $this->faker->image('storage/app/public/stores/subcategories', 640, 480, null,false)
        ];
    }
}
