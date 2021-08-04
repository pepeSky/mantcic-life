<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Price::create([
            'name' => 'Gratis',
            'value' => 0,
        ]);

        Price::create([
            'name' => '1 UF (Nivel 1)',
            'value' => 1,
        ]);

        Price::create([
            'name' => '2 UF (Nivel 2)',
            'value' => 2,
        ]);

        Price::create([
            'name' => '3 UF (Nivel 3)',
            'value' => 3,
        ]);

        
    }
}
