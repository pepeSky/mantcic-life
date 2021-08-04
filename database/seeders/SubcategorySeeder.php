<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories =[
            [
                'category_id' => 1,
                'name' => 'Celulares y smartphones',
                'slug' => Str::slug('Celulares y smartphones'),


            ],
            [
                'category_id' => 1,
                'name' => 'Accesorios para celulares',
                'slug' => Str::slug('Accesorios para celulares'),

            ],
            [
                'category_id' => 1,
                'name' => 'smartwatches',
                'slug' => Str::slug('smartwatches'),

            ],

            // TV y Audio

            [
                'category_id' => 2,
                'name' => 'TV y Video',
                'slug' => Str::slug('TV y Video'),
                'features' => true,
                'dimensions' => true
            ],
            [
                'category_id' => 2,
                'name' => 'Audios',
                'slug' => Str::slug('Audios'),
                'features' => true,
                'dimensions' => true
            ],
            [
                'category_id' => 2,
                'name' => 'Audio para Autos',
                'slug' => Str::slug('Audio para Autos'),
                'features' => true,
                'dimensions' => true
            ],

            // Consola y Video Juego

            [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox'),
                'features' => true,
                'dimensions' => true
            ],

            [
                'category_id' => 3,
                'name' => 'Play Station',
                'slug' => Str::slug('Play Station'),
                'features' => true,
                'dimensions' => true
            ],

            [
                'category_id' => 3,
                'name' => 'Video Juego Pc',
                'slug' => Str::slug('Video Juego Pc'),
                'features' => true,
                'dimensions' => true
            ],

            [
                'category_id' => 3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo'),
                'features' => true,
                'dimensions' => true
            ],

            //Computacion

            [
                'category_id' => 4,
                'name' => 'Portatiles',
                'slug' => Str::slug('Portaltiles'),
                'features' => true,
                'dimensions' => true
            ],
            [
                'category_id' => 4,
                'name' => 'Pc Escritorio',
                'slug' => Str::slug('Pc Escritorio'),
                'features' => true,
                'dimensions' => true
            ],
            [
                'category_id' => 4,
                'name' => 'Almacenamiento',
                'slug' => Str::slug('Almacenamiento'),
                'features' => true,
                'dimensions' => true
            ],
            [
                'category_id' => 4,
                'name' => 'Accesorios Computacionales',
                'slug' => Str::slug('Accesorios Computacionales'),
                'features' => true,
                'dimensions' => true
            ],

            // Modas

            [
                'category_id' => 5,
                'name' => 'Mujeres',
                'slug' => Str::slug('Mujeres'),
                'features' => true,
                'dimensions' => true
            ],

            [
                'category_id' => 5,
                'name' => 'Hombres',
                'slug' => Str::slug('Hombres'),
                'features' => true,
                'dimensions' => true
            ],

            [
                'category_id' => 5,
                'name' => 'Lentes',
                'slug' => Str::slug('Lentes'),
                'features' => true,
                'dimensions' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Reloj',
                'slug' => Str::slug('Reloj'),
                'features' => true,
                'dimensions' => true
            ],

        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
