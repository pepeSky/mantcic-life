<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GestionPpSky\Sector;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sector::create([
            'name' => 'Sector Primario',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'sector-primario',
            'branch_id' => '6'
        ]);

        Sector::create([
            'name' => 'Sector Secundario',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'sector-secundario',
            'branch_id' => '6'
        ]);

        Sector::create([
            'name' => 'Sector Terciario',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'sector-terceario',
            'branch_id' => '6'
        ]);

        Sector::create([
            'name' => 'Sector Cuaternario',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'sector-cuaternario',
            'branch_id' => '6'
        ]);

        Sector::create([
            'name' => 'Sector Quintario',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'sector-quintario',
            'branch_id' => '6'
        ]);

        Sector::create([
            'name' => 'Sector Servicio',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'sector-servicio',
            'branch_id' => '2'
        ]);

        Sector::create([
            'name' => 'Sector Soporte',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'sector-soporte',
            'branch_id' => '2'
        ]);

        Sector::create([
            'name' => 'Sector Operativo',
            'adjective' =>'jhbsjvdjgvdkhvkb',
            'slug' => 'sector-operativo',
            'branch_id' => '2'
        ]);

    }
}
