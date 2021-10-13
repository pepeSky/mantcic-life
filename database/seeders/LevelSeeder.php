<?php

namespace Database\Seeders;

use App\Models\Mantenance\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create([
            "name" => "Nivel Básico"
        ]);

        Level::create([
            "name" => "Nivel Intermedio"
        ]);

        Level::create([
            "name" => "Nivel Avanzado"
        ]);
    }
}
