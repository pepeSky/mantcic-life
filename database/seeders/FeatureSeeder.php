<?php

namespace Database\Seeders;

use App\Models\Store\Feature;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features = ['color','peso','material','volumen','T min', 'T max'];

        foreach ($features as $feature) {
            Feature::create([
                'name' => $feature,
            ]);
        }
    }
}
