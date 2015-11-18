<?php

namespace App\ViewComposers;

use Illuminate\Contracts\View\View;
use Modules\Dashboard\Menus\AdministratorMenu;
use Modules\Dashboard\Repositories\DashboardRepository;

class AllComposer
{

    /**
     * @var DashboardRepository
     */
    private $dashboard;
    /**
     * @var AdministratorMenu
     */
    private $administratorMenu;

    public function __construct(DashboardRepository $dashboard, AdministratorMenu $administratorMenu)
    {

        $this->dashboard = $dashboard;
        $this->administratorMenu = $administratorMenu;
    }

    /**
     * Asociar datos a la vista.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('data', $this->dashboard->all()[0])
        ->with('administratorMenu', $this->administratorMenu);
    }
}
