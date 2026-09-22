<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $role = Role::create(['name' => 'Admin']);
        $role->givePermissionTo([
            'Crear Servicios',
            'Leer Servicios',
            'Actualizar Servicios',
            'Eliminar Servicios',
            'Ver Panel Control',
            'Crear Role',
            'Listar Role',
            'Editar Role',
            'Eliminar Role',
            'Leer Usuarios',
            'Editar Usuarios',
        ]);

        $role = Role::create(['name' => 'Trabajador']);
        $role->givePermissionTo([
            'Crear Servicios',
            'Leer Servicios',
            'Actualizar Servicios',
            'Eliminar Servicios',
        ]);

        $role = Role::create(['name' => 'Empleado']);
        $role->givePermissionTo([
            'Crear Servicios',
            'Leer Servicios',
            'Actualizar Servicios',
        ]);

        $role = Role::create(['name' => 'Colaborador']);
        $role->givePermissionTo([
            'Crear Servicios',
            'Leer Servicios',
            'Actualizar Servicios',
        ]);

        Role::create(['name' => 'Cliente']);
    }
}
