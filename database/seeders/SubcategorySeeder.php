<?php

namespace Database\Seeders;

use App\Models\GestionPpSky\Subcategory;
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
        Subcategory::create([
            'name' => 'Casa',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'casa',
            'category_id' => '1'
        ]);

        Subcategory::create([
            'name' => 'Departamento',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'departamento',
            'category_id' => '1'
        ]);

        Subcategory::create([
            'name' => 'Habitación',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'habitacion',
            'category_id' => '1'
        ]);

        Subcategory::create([
            'name' => 'Residencial Tipo A',
            'adjective' =>'Edificio con alta cantidad de departamentos, o edificios en los cuales sus dueños ostentan de un buen patrimonio',
            'slug' =>'residencial-tipo-a',
            'category_id' => '2'
        ]);

        Subcategory::create([
            'name' => 'Residencial Tipo B',
            'adjective' =>'Edificios con cantidad promedio de departamentos, en el cual sus dueños no recurrieron a servicios sociales para su adquisicion',
            'slug' =>'residencial-tipo-b',
            'category_id' => '2'
        ]);

        Subcategory::create([
            'name' => 'Residencial Tipo C',
            'adjective' =>'Edificios con baja cantidad de departamentos o de tipo social',
            'slug' => 'residencial-tipo-c',
            'category_id' => '2'
        ]);

        Subcategory::create([
            'name' => 'Comercial Tipo A',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'comercial-tipo-a',
            'category_id' => '2'
        ]);

        Subcategory::create([
            'name' => 'Comercial Tipo B',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'comercial-tipo-b',
            'category_id' => '2'
        ]);

        Subcategory::create([
            'name' => 'Obrero Tipo A',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'obrero-tipo-a',
            'category_id' => '5'
        ]);

        Subcategory::create([
            'name' => 'Obrero Tipo B',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'obrero-tipo-b',
            'category_id' => '5'
        ]);

        Subcategory::create([
            'name' => 'Obrero Tipo C',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'obrero-tipo-c',
            'category_id' => '5'
        ]);

        Subcategory::create([
            'name' => 'Técnico Tipo A',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'tecnico-tipo-a',
            'category_id' => '5'
        ]);

        Subcategory::create([
            'name' => 'Técnico Tipo B',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'tecnico-tipo-b',
            'category_id' => '5'
        ]);

        Subcategory::create([
            'name' => 'Técnico Tipo C',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'tecnico-tipo-c',
            'category_id' => '5'
        ]);

        Subcategory::create([
            'name' => 'Profesional Tipo A',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'profesional-tipo-a',
            'category_id' => '5'
        ]);

        Subcategory::create([
            'name' => 'Profesional Tipo B',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'profesional-tipo-b',
            'category_id' => '5'
        ]);

        Subcategory::create([
            'name' => 'Profesional Tipo C',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'profesional-tipo-c',
            'category_id' => '5'
        ]);
    }
}
