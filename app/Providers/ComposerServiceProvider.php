<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ViewComposers\AllComposer;


class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Usando funciones anónimas...
        view()->composer('*', AllComposer::class);
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
