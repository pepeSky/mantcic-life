<?php

namespace Database\Seeders;

use App\Models\Mantenance\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::create([
            'url' => 'emergencia.jpg',
            'imageable_id' => '4',
            'imageable_type' =>'App\Models\Mantenance\Service'
        ]);

        Image::create([
            'url' => 'app\public\services\adm-control.jpg',
            'imageable_id' => '9',
            'imageable_type' =>'App\models\mantenance\service'
        ]);

        Image::create([
            'url' => 'app\public\services\const-dise.jpg',
            'imageable_id' => '12',
            'imageable_type' =>'App\models\mantenance\service'
        ]);

        Image::create([
            'url' => 'app\public\services\cont-audi.jpg',
            'imageable_id' => '10',
            'imageable_type' =>'App\models\mantenance\service'
        ]);

        Image::create([
            'url' => 'correctivo.jpeg',
            'imageable_id' => '3',
            'imageable_type' =>'App\models\mantenance\service'
        ]);

        Image::create([
            'url' => 'app\public\services\implementacion.jpeg',
            'imageable_id' => '1',
            'imageable_type' =>'App\models\mantenance\service'
        ]);

        Image::create([
            'url' => 'app\public\services\infor-comun.jpg',
            'imageable_id' => '11',
            'imageable_type' =>'App\models\mantenance\service'
        ]);

        Image::create([
            'url' => 'app\public\services\inversion-corto.jpg',
            'imageable_id' => '6',
            'imageable_type' =>'App\models\mantenance\service'
        ]);

        Image::create([
            'url' => 'app\public\services\inversion-largo.jpg',
            'imageable_id' => '8',
            'imageable_type' =>'App\models\mantenance\service'
        ]);

        Image::create([
            'url' => 'app\public\services\inversion-mediano.jpg',
            'imageable_id' => '7',
            'imageable_type' =>'App\models\mantenance\service'
        ]);

        Image::create([
            'url' => 'app\public\services\inversion-puntual.jpg',
            'imageable_id' => '5',
            'imageable_type' =>'App\models\mantenance\service'
        ]);

        Image::create([
            'url' => 'app\public\services\preventivo.jpg',
            'imageable_id' => '2',
            'imageable_type' =>'App\models\mantenance\service'
        ]);

        //Image::factory(100)->create();
    }
}
