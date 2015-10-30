<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;
use Modules\Dashboard\Repositories\DashboardRepository;

class BladeServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     */
    public function boot()
    {
        Blade::directive('route', function($expression) {
            return "<?php echo route($expression) ?>";
        });

        Blade::directive('trans', function($expression) {
            return "<?php echo trans($expression) ?>";
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
