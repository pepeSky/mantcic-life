<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GestionPpSky\Science;

class ScienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Science::create([
            'name' => 'Ciencias Exactas e Ingeniería',
            'adjective' =>'Se conoce como ciencias exactas, ciencias duras, ciencias puras o ciencias fundamentales a las disciplinas que se basan en la observación y experimentación para crear conocimientos y cuyos contenidos pueden sistematizarse a partir del lenguaje matemático. cabe mencionar que la experimentación no se debe realizar sobre el individuo, lo que se realiza es un estudio sobre su comportamiento de él.',
            'slug' => 'ciencias-exactas-e-ingenieria'
        ]);

        Science::create([
            'name' => 'Ciencias Economicas y Administrativas',
            'adjective' =>'Es la ciencia social que estudia la forma de administrar los recursos disponibles para satisfacer las necesidades humanas. ... La ciencia económica envuelve la toma de decisiones de los individuos, las organizaciones y los Estados para asignar esos recursos escasos.',
            'slug' => 'ciencias-economicas-y-administrativas'
        ]);

        Science::create([
            'name' => 'Ciencias de la Salud',
            'adjective' =>'Ciencias de la Salud es un campo de estudio vinculado al creciente desarrollo de diversas disciplinas, tales como la Biología, Química, Física y Medicina, que asumen un papel de primer orden al aportar conceptos, métodos y técnicas que permiten entender los procesos para conservar la salud de los individuos.',
            'slug' => 'ciencias-de-la-salud'
        ]);

        Science::create([
            'name' => 'Ciencias Biologicas y Agropecuarias',
            'adjective' =>'Las ciencias biológicas y agropecuarias son ramas del conocimiento que se encargan tanto de la descripción y comportamiento de los organismos individualmente y en conjunto con su entorno, así como del conjunto de acciones humanas que transforman el medio ambiente natural.',
            'slug' => 'ciencias-exactas-e-ingenieria'
        ]);

        Science::create([
            'name' => 'Ciencias Sociales y Humanidades',
            'adjective' =>'Las ciencias sociales son las ramas de la ciencia relacionadas con la sociedad y el comportamiento humano',
            'slug' => 'ciencias-sociales-y-humanidades'
        ]);
    }
}
