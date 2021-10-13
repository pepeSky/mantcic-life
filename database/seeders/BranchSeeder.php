<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GestionPpSky\Branch;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Branch::create([
            'name' => 'Ingeniería Construcción',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'ingenieria-construccion',
            'science_id' => '1'
        ]);

        Branch::create([
            'name' => 'Ingeniería Mantenimiento',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'ingenieria-mantenimiento',
            'science_id' => '1'
        ]);

        Branch::create([
            'name' => 'Ingeniería Informática',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'ingenieria-informatica',
            'science_id' => '1'
        ]);

        Branch::create([
            'name' => 'Ingeniería Eléctrica',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'ingenieria-electrica',
            'science_id' => '1'
        ]);

        Branch::create([
            'name' => 'Ingeniería Eléctronica',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'ingenieria-electronica',
            'science_id' => '1'
        ]);

        Branch::create([
            'name' => 'Economía',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'economia',
            'science_id' => '2'
        ]);

        Branch::create([
            'name' => 'Administración Empresas',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'administracion-empresas',
            'science_id' => '2'
        ]);

        Branch::create([
            'name' => 'Contabilidad Publica y Auditoría',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'contabilidad-publica-y-auditoria',
            'science_id' => '1'
        ]);

        Branch::create([
            'name' => 'Medicina',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'medicina',
            'science_id' => '3'
        ]);

        Branch::create([
            'name' => 'Neurología',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'nurologia',
            'science_id' => '3'
        ]);

        Branch::create([
            'name' => 'Psiquiatría',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'psiquiatria',
            'science_id' => '3'
        ]);

    }
}
