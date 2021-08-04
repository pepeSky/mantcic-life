<?php

namespace Database\Seeders;

use App\Models\Image;
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
            'url' => 'services/emergencia.jpg',
            'imageable_id' => '4',
            'imageable_type' =>'App\models\service'
        ]);

        Image::create([
            'url' => 'services/adm-control.jpg',
            'imageable_id' => '9',
            'imageable_type' =>'App\models\service'
        ]);

        Image::create([
            'url' => 'services/const-dise.jpg',
            'imageable_id' => '12',
            'imageable_type' =>'App\models\service'
        ]);

        Image::create([
            'url' => 'services/cont-audi.jpg',
            'imageable_id' => '10',
            'imageable_type' =>'App\models\service'
        ]);

        Image::create([
            'url' => 'services/correctivo.jpeg',
            'imageable_id' => '3',
            'imageable_type' =>'App\models\service'
        ]);

        Image::create([
            'url' => 'services/implementacion.jpeg',
            'imageable_id' => '1',
            'imageable_type' =>'App\models\service'
        ]);

        Image::create([
            'url' => 'services/infor-comun.jpg',
            'imageable_id' => '11',
            'imageable_type' =>'App\models\service'
        ]);

        Image::create([
            'url' => 'services/inversion-corto.jpg',
            'imageable_id' => '6',
            'imageable_type' =>'App\models\service'
        ]);

        Image::create([
            'url' => 'services/inversion-largo.jpg',
            'imageable_id' => '8',
            'imageable_type' =>'App\models\service'
        ]);

        Image::create([
            'url' => 'services/inversion-mediano.jpg',
            'imageable_id' => '7',
            'imageable_type' =>'App\models\service'
        ]);

        Image::create([
            'url' => 'services/inversion-puntual.jpg',
            'imageable_id' => '5',
            'imageable_type' =>'App\models\service'
        ]);

        Image::create([
            'url' => 'services/preventivo.jpg',
            'imageable_id' => '2',
            'imageable_type' =>'App\models\service'
        ]);

        //Image::factory(100)->create();
    }
}
