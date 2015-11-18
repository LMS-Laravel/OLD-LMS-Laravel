<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Dashboard\Repositories\DashboardRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     */
    public function boot()
    {
        /*\Event::listen(['principal.menu'], function($menu){
            return $menu->add('test', [
                'title' => 'test menu',
                'url' => '#home',
                'data-scroll' => true,
            ]);
        });*/
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
