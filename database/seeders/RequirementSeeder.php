<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mantenance\Requirement;

class RequirementSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      Requirement::create([
         'name' => 'Acreditar Residencia y Documentación Nacional',
         'service_id' => '1'
      ]);

      Requirement::create([
         'name' => 'Ser el Propietario o Representante Legal de la Propiedad, Instalación o el Equipo',
         'service_id' => '1'
      ]);

      Requirement::create([
         'name' => 'Aceptar las Politicas del Sistema manTcic Life',
         'service_id' => '1'
      ]);

      Requirement::create([
         'name' => 'Aceptar las Condiciones del Sistema manTcic Life',
         'service_id' => '1'
      ]);

      Requirement::create([
         'name' => 'Firmar Contrato de Administración y Prestación Servicios',
         'service_id' => '1'
      ]);

      Requirement::create([
         'name' => 'Sin Necesidad de un Plan de Mantenimiento',
         'service_id' => '4'
      ]);

      Requirement::create([
         'name' => 'Ser el responsable de la instalación o el equipo',
         'service_id' => '4'
      ]);

      Requirement::create([
         'name' => 'Ser el responsable del pago del servicio',
         'service_id' => '4'
      ]);

      Requirement::create([
         'name' => 'Pago con Tarjeta o transferencia electronica',
         'service_id' => '4'
      ]);

      Requirement::create([
         'name' => 'Aceptar formulario de responsabilidad para la ejecucion de actividades',
         'service_id' => '4'
      ]);
   }
}
