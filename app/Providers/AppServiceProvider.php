<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Dashboard\Repositories\DashboardRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @param DashboardRepository $dashboard
     */
    public function boot(DashboardRepository  $dashboard)
    {
        \Config::set('lms.name', $dashboard->all()[0]['name']);
        \Config::set('lms.description', $dashboard->all()[0]['description']);
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
