<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Store\Product;


class FeatureProductSeeder extends Seeder
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
                ->where('dimensions', false);
        })->get();

        foreach ($products as $product) {
            $product->features()->attach([
                1 => ['quantity' => 10
            ],
                2 => ['quantity' => 10
            ],
                3 => ['quantity' => 10
            ],
                4 => ['quantity' => 10
            ],
                5 => ['quantity' => 10
            ],
                6 => ['quantity' => 10
                 ]
            ]);
        }
    }
}
