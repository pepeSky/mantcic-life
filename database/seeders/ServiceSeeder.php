<?php

namespace Database\Seeders;

use App\Models\Mantenance\Image;
use App\Models\Mantenance\Service;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'title' => 'Servicios Implementación',
            'subtitle' => 'Gestiona tu ciclo vida en compañia de los mejores',
            'description' => 'Este servicio tiene por finalidad hacer que el cliente o usuario del sistema, tenga el mayor beneficio para el cuidado de su instalacion en el tiempo,donde en una serie de actividades y tareas programadas se podran realizar todas las reparaciones y correciones que su hogar necesita.',
            'status' => '3', // Publicado
            'slug' => 'implementacion',
            'user_id' => '1'
        ]);

        Service::create([
            'title' => 'Servicios Preventivos',
            'subtitle' => 'Previene fallas en el transcurso de tu ciclo vida',
            'description' => 'Este servicio tiene por finalidad hacer que el cliente o usuario del sistema, no vea interrumpida sus funciones las cuales pueden ocacionarle la dentencion o falla del proceso',
            'status' => '3', // Publicado
            'slug' => 'preventivo',
            'user_id' => '1'
        ]);

        Service::create([
            'title' => 'Servicios Correctivos',
            'subtitle' => 'Corrige fallas en el transcurso de tu ciclo de vida',
            'description' => 'Este servicio tiene por finalidad hacer que el cliente o usuario ajeno al sistema, pueda gestionar las reparaciones necesarias no vea interrumpida sus funciones las cuales pueden ocacionarle una emergencia en el proceso.',
            'status' => '3', // Publicado
            'slug' => 'correctivo',
            'user_id' => '1'
        ]);


        Service::create([
            'title' => 'Servicios Emergencia',
            'subtitle' => 'Fallas e Interrupciones de Emergencias, dales solución a la brevedad',
            'description' => 'Este servicio tiene por finalidad hacer que el cliente o usuario ajeno al sistema, pueda gestionar y dar solución a las emergencias necesarias para la puesta en marcha de su sistema',
            'status' => '3', // Publicado
            'slug' => 'emergencias',
            'user_id' => '1'
        ]);


        Service::create([
            'title' => 'Inversión Puntual', //Inversión Puntual
            'subtitle' => 'Invierte en nuestros proyectos flash, para obtener beneficios de manera rapida y confiable',
            'description' => 'jhvjuc,hxkyfkyfrxkyxck',
            'status' => '2', //Revisión
            'slug' => 'inversion-puntual',
            'user_id' => '1'
        ]);

        Service::create([
            'title' => 'Inversión Corto Plazo',
            'subtitle' => 'Ahorra e Invierte con nosotros, para obtener beneficios de manera estable, para tus proyectos anuales',
            'description' => 'kgckyxkyjrxkyrzxktrzkrxk,tcxl,tdcl',
            'status' => '2', // Revisión
            'slug' => 'inversion-corto-plazo',
            'user_id' => '1'
        ]);

        Service::create([
            'title' => 'Inversión Mediano Plazo',
            'subtitle' => 'Ahorra e Invierte en nuestros proyectos de mediano plazo, para obtener dividendos y concretar esas ideas que estas proyectando',
            'description' => 'kgckyxkyjrxkyrzxktrzkrxk,tcxl,tdcl',
            'status' => '2', // Revisión
            'slug' => 'inversion-mediano-plazo',
            'user_id' => '1'
        ]);

        Service::create([
            'title' => 'Inversión Largo Plazo',
            'subtitle' => 'Ahorra e Invierte con nosotros para obtener beneficios de manera estable, para tus proyectos anuales',
            'description' => 'ujcykutxkyrxkjtrxkyrxklytdclutclc',
            'status' => '2', // Revisión
            'slug' => 'inversion-largo-plazo',
            'user_id' => '1'
        ]);

        Service::create([
            'title' => 'Servicios Administración y Control',
            'subtitle' => 'Te ayudamos con la administración y control de tu negocio',
            'description' => 'liuvluycuppñcylutxkyrxjrzeqatar',
            'status' => '1', //Borrador
            'slug' => 'servicios-administracion-y-control',
            'user_id' => '1'
        ]);

        Service::create([
            'title' => 'Servicios Contabilidad y Auditoría',
            'subtitle' => 'Te brindamos asesoria contable y auditamos tu proceso para que tu negocio de ese impulso que necesitas',
            'description' => 'ñiyflucflutckyrxditexsutexsujrtxkytcklyt',
            'status' => '1', //Borrador
            'slug' => 'servicios-contabilidad-y-auditoria',
            'user_id' => '1'
        ]);

        Service::create([
            'title' => 'Servicios Comunicación e Informática',
            'subtitle' => 'Gestionamos tu información y establecemos la comunicación de toda tu organización',
            'description' => 'jhvljhvljvhppjgcvkugckc',
            'status' => '1', //Borrador
            'slug' => 'servicios-informatica-y-comunicacion',
            'user_id' => '1'
        ]);

        Service::create([
            'title' => 'Servicios Construcción y Diseño',
            'subtitle' => 'Te ayudamos a construir o diseñar eso que tienes en tu mente, para que lo disfrutes con tu familia',
            'description' => 'kjgcjyrxtjezxryejtxkytdckyu',
            'status' => '1', //Borrador
            'slug' => 'servicios-informatica-y-diseño',
            'user_id' => '1'
        ]);

        Service::create([
            'title' => 'Servicios de Salud Integral',
            'subtitle' => 'Te ayudamos a controlar los estados de tú salud en el transcurso del ciclo de vida, para que puedas brindar una mayor tranquilidad a tu familia y seres queridos',
            'description' => 'kjgcjyrxtjezxryejtxkytdckyu',
            'status' => '1', //Borrador
            'slug' => 'servicios-de-salud-integral',
            'user_id' => '1'
        ]);

    }
}
