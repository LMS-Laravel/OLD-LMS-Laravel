<?php

namespace app\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
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
     */
    public function register()
    {
        //
    }
}
