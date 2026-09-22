<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Jose Fernando Riquelme Vergara',
            'email' => 'jose.riquelme@mantcic-life.cl',
            'password' => bcrypt('ggjfrv2026')
        ]);
        $user->assignRole('Admin');

        $user = User::create([
            'name' => 'Judith Alejandra Nuñez Donoso',
            'email' => 'judith.nuñez@mantcic-life.cl',
            'password' => bcrypt('judith2026')
        ]);
        $user->assignRole('Trabajador');

        $user = User::create([
            'name' => 'Nohemi Antonia Cifuentes Nuñez',
            'email' => 'nohemi.antonia@mantcic-life.cl',
            'password' => bcrypt('nohemi2026')
        ]);
        $user->assignRole('Empleado');

    }
}
