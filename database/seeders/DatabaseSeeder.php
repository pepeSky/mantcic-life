<?php

namespace Database\Seeders;

use App\Models\GestionPpSky\Category;
use App\Models\GestionPpSky\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        Storage::deleteDirectory('stores/categories');
        Storage::deleteDirectory('stores/subcategories');
        Storage::deleteDirectory('stores/products');
        Storage::deleteDirectory('web/services');

        Storage::makeDirectory('stores/categories');
        Storage::makeDirectory('stores/subcategories');
        Storage::makeDirectory('stores/products');
        Storage::makeDirectory('web/services');



        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ScienceSeeder::class);
        $this->call(BranchSeeder::class);
        $this->call(SectorSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(TagSeeder::class);



        $this->call(ServiceSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(PriceSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(GoalSeeder::class);
        $this->call(RequirementSeeder::class);
        $this->call(ModuleSeeder::class);
        $this->call(ActivitySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(FeatureSeeder::class);
        $this->call(FeatureProductSeeder::class);
        $this->call(DimensionSeeder::class);
        $this->call(PlatformSeeder::class);




    }
}
