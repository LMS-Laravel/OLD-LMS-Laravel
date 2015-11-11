<?php

namespace app\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        Blade::directive('route', function ($name) {
            return "<?php echo route($name) ?>";
        });

        Blade::directive('trans', function ($expression) {
            return "<?php echo trans($expression) ?>";
        });
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
