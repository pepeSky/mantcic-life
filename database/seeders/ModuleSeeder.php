<?php

namespace Database\Seeders;

use App\Models\Mantenance\Module;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Module::Create([
            'name' => 'Mantenimiento Domiciliario',
            'service_id' => '1'
        ]);

        Module::Create([
            'name' => 'Mantenimiento Edificios y Comunidades',
            'service_id' => '1'
        ]);

        Module::Create([
            'name' => 'Mantenimiento Empresas y Fábricas',
            'service_id' => '1'
        ]);

        Module::Create([
            'name' => 'Mantenimiento Municipal y Comunal',
            'service_id' => '1'
        ]);

        Module::Create([
            'name' => 'Mantenimiento en Instituciones y Organizaciones',
            'service_id' => '1'
        ]);

        Module::Create([
            'name' => 'Ejecución de Actividades Domiciliarias',
            'service_id' => '2'
        ]);

        Module::Create([
            'name' => 'Ejecución de Actividades en Edificios y Comunidades',
            'service_id' => '2'
        ]);

        Module::Create([
            'name' => 'Ejecución de Actividades en Empresas y Fábricas',
            'service_id' => '2'
        ]);

        Module::Create([
            'name' => 'Ejecución Actividades en Instituciones y Organizaciones',
            'service_id' => '2'
        ]);

        Module::Create([
            'name' => 'Reparaciones y Modificaciones en Domicilios',
            'service_id' => '3'
        ]);

        Module::Create([
            'name' => 'Reparaciones y Modificaciones en Edificios y Comunidades',
            'service_id' => '3'
        ]);

        Module::Create([
            'name' => 'Reparaciones y Modificaciones en Empresas y Fábricas',
            'service_id' => '3'
        ]);

        Module::Create([
            'name' => 'Reparaciones y Modificaciones en Instituciones y Organizaciones',
            'service_id' => '3'
        ]);

        Module::Create([
            'name' => 'Emergencias Domiciliarias',
            'service_id' => '4'
        ]);

        Module::Create([
            'name' => 'Emergencias Edificios y Comunidades',
            'service_id' => '4'
        ]);

        Module::Create([
            'name' => 'Emergencias Empresas y Fábricas',
            'service_id' => '4'
        ]);

        Module::Create([
            'name' => 'Emergencias Instituciones',
            'service_id' => '4'
        ]);


    }
}
