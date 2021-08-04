<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Models\Activity;
use App\Models\Module;
use App\Observers\ActivityObserver;
use App\Observers\ModuleObserver;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Module::observe(ModuleObserver::class);
        Activity::observe(ActivityObserver::class);


        Blade::directive('routeIs', function($expression){
            return "<?php if(Request::url() == route($expression)): ?>";
        });
    }

}
