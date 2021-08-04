<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Category::create([
            'name' => 'Domiciliario',
        ]);

        Category::create([
            'name' => 'Edificios',
        ]);

        Category::create([
            'name' => 'Empresas',
        ]);

        Category::create([
            'name' => 'Instituciones',
        ]);

        Category::create([
            'name' => 'Persona Natural',
        ]);

        Category::create([
            'name' => 'Persona Juridica Simple', // 3 individuos familiares
        ]);

        Category::create([
            'name' => 'Persona Juridica Compuesta',
        ]);

        Category::create([
            'name' => 'Persona Juridica Capitales',
        ]);

        $categories = [
            [
                'name' => 'Celulares y Tablets',
                'slug' => Str::slug('Celulares y tablets'),
                'icon' => '<i class="fab fa-500px"></i>',
            ],

            [
                'name' => 'TV, Audio y Video',
                'slug' => Str::slug('TV, Audio y Video'),
                'icon' => '<i class="fab fa-500px"></i>',
            ],

            [
                'name' => 'Computación',
                'slug' => Str::slug('Computación'),
                'icon' => '<i class="fab fa-500px"></i>',
            ],

            [
                'name' => 'Moda',
                'slug' => Str::slug('moda'),
                'icon' => '<i class="fab fa-500px"></i>',
            ],
        ];

        foreach ($categories as $category){
                $category = Category::factory(1)->create($category)->first();

                $brands = Brand::factory(20)->create();

                foreach ($brands as $brand){
                    $brand->categories()->attach($category->id);
                }
        }
    }
}
