<?php

namespace Database\Seeders;

use App\Models\Store\Brand;
use App\Models\GestionPpSky\Category;
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
            'adjective' =>'Contrucciones destinadas a la vivienda',
            'slug' => 'domiciliario',
            'sector_id' => '6' //UnSe
        ]);

        Category::create([
            'name' => 'Edificios',
            'adjective' =>'Edificios Residenciales',
            'slug' => 'edificios',
            'sector_id' => '6'
        ]);

        Category::create([
            'name' => 'Empresas',
            'adjective' =>'Empresas u Edificios de uso Comercial',
            'slug' => 'empresas',
            'sector_id' => '6'
        ]);

        Category::create([
            'name' => 'Instituciones',
            'adjective' =>'kjbjhvujvug',
            'slug' => 'instituciones',
            'sector_id' => '6'
        ]);

        Category::create([
            'name' => 'Proveedores',
            'adjective' =>'Usuarios destinados a proveer materiales e insumos',
            'slug' => 'proveedores',
            'sector_id' => '8'
        ]);

        Category::create([
            'name' => 'Personal',
            'adjective' =>'Usuarios del sistema que son trabajadores directos',
            'slug' => 'personal',
            'sector_id' => '7'
        ]);


        Category::create([
            'name' => 'Campo',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'campo',
            'sector_id' => '1'
        ]);

        Category::create([
            'name' => 'Forestal',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'forestal',
            'sector_id' => '1'
        ]);

        Category::create([
            'name' => 'Industrial',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'industrial',
            'sector_id' => '2'
        ]);
    }

}
