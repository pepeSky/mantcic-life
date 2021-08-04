<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Crear Servicios'
        ]);

        Permission::create([
            'name' => 'Leer Servicios'
        ]);

        Permission::create([
            'name' => 'Actualizar Servicios'
        ]);

        Permission::create([
            'name' => 'Eliminar Servicios'
        ]);

        Permission::create([
            'name' => 'Ver Panel Control'
        ]);

        Permission::create([
            'name' => 'Crear Role'
        ]);

        Permission::create([
            'name' => 'Listar Role'
        ]);

        Permission::create([
            'name' => 'Editar Role'
        ]);

        Permission::create([
            'name' => 'Eliminar Role'
        ]);

        Permission::create([
            'name' => 'Leer Usuarios'
        ]);

        Permission::create([
            'name' => 'Editar Usuarios'
        ]);
    }
}
