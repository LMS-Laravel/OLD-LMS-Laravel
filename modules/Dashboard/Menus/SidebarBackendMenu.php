<?php
namespace Modules\Dashboard\Menus;

use App\BaseMenu;

class SidebarBackendMenu extends BaseMenu
{
    public function __construct()
    {
        $this->class = 'sidebar-nav';
    }

    /**
     * Specify Items Menu
     * @return string
     */
    function items()
    {

    }

}