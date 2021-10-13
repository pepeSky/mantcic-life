<?php

namespace Database\Seeders;

use App\Models\Mantenance\Platform;
use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Platform::create([
            'name'=>'youtube'
        ]);

        Platform::create([
            'name'=>'vimeo'
        ]);
    }
}
