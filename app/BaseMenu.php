<?php

namespace app;

use Styde\Html\Facades\Menu;

abstract class BaseMenu
{
    protected $class = null;

    /**
     * @param null $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * Specify Items Menu.
     *
     * @return string
     */
    abstract public function items();

    /**
     * @return mixed
     */
    public function boot()
    {
        return Menu::make($this->items(), $this->class);
    }
}
