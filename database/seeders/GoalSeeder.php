<?php

namespace Database\Seeders;

use App\Models\Mantenance\Goal;
use Faker\Guesser\Name;
use Illuminate\Database\Seeder;

class GoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Goal::create([
           'name' => 'Solicitud de Servicios a Sistema Mantenimiento manTcic Life',
           'service_id' => '4'
        ]);

        Goal::create([
            'name' => 'Creación Hoja Vida y Registros en Sistema Mantenimiento manTcic Life',
            'service_id' => '4'
         ]);

         Goal::create([
            'name' => 'Solución de Problemas en Unidades, Equipos e Instalaciones',
            'service_id' => '4'
         ]);

         Goal::create([
            'name' => 'Solución de Problemas en la Ejecución de Actividades y Tareas',
            'service_id' => '4'
         ]);

         Goal::create([
            'name' => 'Solución de Problemas con Materiales, Insumos y Repuestos',
            'service_id' => '4'
         ]);

         Goal::create([
            'name' => 'Derivación al Sistema de Mantenimiento manTcic Life',
            'service_id' => '4'
         ]);

         Goal::create([
            'name' => 'Derivación a Sistema manTcic Life',
            'service_id' => '3'
         ]);

         Goal::create([
            'name' => 'Capacitación en el Sistema manTcic Life',
            'service_id' => '3'
         ]);

         Goal::create([
            'name' => 'Reparación de Unidades e Instalaciones',
            'service_id' => '3'
         ]);

         Goal::create([
            'name' => 'Ejecución de Actividades y Tareas',
            'service_id' => '3'
         ]);

         Goal::create([
            'name' => 'Venta de Materiales, Insumos y Repuestos',
            'service_id' => '3'
         ]);

         Goal::create([
            'name' => 'Creación Hoja Vida y Pauta Mantenimiento',//Generación de Indicadores Mantenimiento
            'service_id' => '3'
         ]);

         Goal::create([
            'name' => 'Integración a Sistema manTcic Life',
            'service_id' => '2'
         ]);

         Goal::create([
            'name' => 'Estandarización al Sistema manTcic Life',
            'service_id' => '2'
         ]);

         Goal::create([
            'name' => 'Gestión de Unidades e Instalaciones',
            'service_id' => '2'
         ]);

         Goal::create([
            'name' => 'Gestión de Actividades y Tareas',
            'service_id' => '2'
         ]);

         Goal::create([
            'name' => 'Gestión de Almacén y Repuestos',
            'service_id' => '2'
         ]);

         Goal::create([
            'name' => 'Generación de Indicadores Mantenimiento', //Automatización y Control Procesos
            'service_id' => '2'
         ]);

         Goal::create([
            'name' => 'Implementación Plataforma manTcic Life',
            'service_id' => '1'
         ]);

         Goal::create([
            'name' => 'Normalización al Sistema manTcic Life',
            'service_id' => '1'
         ]);

         Goal::create([
            'name' => 'Administración de Unidades e Instalaciones',
            'service_id' => '1'
         ]);

         Goal::create([
            'name' => 'Administración de Actividades y Tareas',
            'service_id' => '1'
         ]);

         Goal::create([
            'name' => 'Administración de Almacén y Repuestos',
            'service_id' => '1'
         ]);

         Goal::create([
            'name' => 'Automatización y Control Procesos',
            'service_id' => '1'
         ]);

    }
}
