<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Product;

class DimensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::whereHas('subcategory', function(Builder $query){
            $query->where('features', true)
                ->where('dimensions', true);
        })->get();

        $dimensions = ['green', 'white', 'yellow', 'green', 'cobre', 'acero', 'plata'];

        foreach ($products as $product) {

            foreach ($dimensions as $dimension) {
                $product->dimensions()->create([
                    'name' => $dimension,
                ]);
            }
        }

    }
}
