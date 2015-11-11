<?php

namespace app\ViewComposers;

use Illuminate\Contracts\View\View;
use Modules\Dashboard\Repositories\DashboardRepository;

class AllComposer
{
    /**
     * @var DashboardRepository
     */
    private $dashboard;

    public function __construct(DashboardRepository $dashboard)
    {
        $this->dashboard = $dashboard;
    }

    /**
     * Asociar datos a la vista.
     *
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('data', $this->dashboard->all()[0]);
    }
}
