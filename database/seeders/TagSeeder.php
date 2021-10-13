<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GestionPpSky\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //**
          Tag::create([
              'name' => 'Servicio Mantenimiento',
              'adjective' =>'jhbsjvdjgvdkhvkb',
              'slug' => 'servicio-mantenimiento',
              'color' => 'green'
          ]);

          Tag::create([
              'name' => 'Servicio Reparación',
              'adjective' =>'jhbsjvdjgvdkhvkb',
              'slug' => 'servicio-reparacion',
              'color' => 'yellow'
          ]);

          Tag::create([
              'name' => 'Servicio Emergencia',
              'adjective' =>'jhbsjvdjgvdkhvkb',
              'slug' => 'servicio-emergencia',
              'color' => 'red'
          ]);

          Tag::create([
              'name' => 'Servicio Customización',
              'adjective' =>'jhbsjvdjgvdkhvkb',
              'slug' => 'servicio-customizacion',
              'color' => 'blue'
          ]);

          Tag::create([
              'name' => 'Preventiva',
              'adjective' =>'jhbsjvdjgvdkhvkb',
              'slug' => 'preventiva',
              'color' => 'teal'
          ]);

          Tag::create([
              'name' => 'Correctiva',
              'adjective' =>'jhbsjvdjgvdkhvkb',
              'slug' => 'correctiva',
              'color' => 'orange'
          ]);

          Tag::create([
              'name' => 'Emergencia',
              'adjective' =>'jhbsjvdjgvdkhvkb',
              'slug' => 'emergencia',
              'color' => 'red'
          ]);

          Tag::create([
              'name' => 'Análisis Condición',
              'adjective' =>'jhbsjvdjgvdkhvkb',
              'slug' => 'analisis-condicion',
              'color' => 'indigo'
          ]);

          Tag::create([
              'name' => 'Constancia',
              'adjective' =>'jhbsjvdjgvdkhvkb',
              'slug' => 'constancia',
              'color' => 'yellow'
          ]);

          Tag::create([
              'name' => 'Sala Bombas',
              'adjective' =>'jhbsjvdjgvdkhvkb',
              'slug' => 'sala-bombas',
              'color' => 'blue'
          ]);

          Tag::create([
              'name' => 'Sala Calderas',
              'adjective' =>'jhbsjvdjgvdkhvkb',
              'slug' => 'sala-calderas',
              'color' => 'red'
          ]);

          Tag::create([
              'name' => 'Vertical Agua Fria',
              'adjective' =>'jhbsjvdjgvdkhvkb',
              'slug' => 'vertical-agua-fria',
              'color' => 'blue'
          ]);

          Tag::create([
              'name' => 'Vertical Agua Caliente Sanitaria',
              'adjective' =>'jhbsjvdjgvdkhvkb',
              'slug' => 'vertical-agua-caliente-sanitaria',
              'color' => 'red'
          ]);

          Tag::create([
              'name' => 'Vertical Agua Caliente Calefaccion',
              'adjective' =>'jhbsjvdjgvdkhvkb',
              'slug' => 'vertical-agua-caliente-calefaccion',
              'color' => 'red'
          ]);

          Tag::create([
              'name' => 'Sala Electrica y Distribucion',
              'adjective' =>'jhbsjvdjgvdkhvkb',
              'slug' => 'sala-electrica-y-distribucion',
              'color' => 'red'
          ]);

          Tag::create([
              'name' => 'Sala Basura y Canalizacion',
              'adjective' =>'jhbsjvdjgvdkhvkb',
              'slug' => 'sala-basura-y-canalizacion',
              'color' => 'red'
          ]);

          Tag::create([
              'name' => 'Sistema Emergencia',
              'adjective' =>'jhbsjvdjgvdkhvkb',
              'slug' => 'sistema-emergencia',
              'color' => 'red'
          ]);

          Tag::create([
              'name' => 'Sistema Ventilacion y Extraccion',
              'adjective' =>'jhbsjvdjgvdkhvkb',
              'slug' => 'sistema-ventilacion-y-extraccion',
              'color' => 'red'
          ]);

          Tag::create([
              'name' => 'Espacios Comunes',
              'adjective' =>'jhbsjvdjgvdkhvkb',
              'slug' => 'espacios-comunes',
              'color' => 'red'
          ]);

          Tag::create([
              'name' => 'Servicio Cliente',
              'adjective' =>'jhbsjvdjgvdkhvkb',
              'slug' => 'servicio-cliente',
              'color' => 'red'
          ]);
    }
}
