<?php

namespace app;

use Styde\Html\Facades\Menu;
use Illuminate\Support\Facades\Event;

abstract class BaseMenu
{
    protected $class = null;

    protected $items = [];

    protected $name = null;

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

    abstract public function police();


    /**
     * @return mixed
     */
    public function boot()
    {
        $this->items = $this->items();

        Event::fire($this->name, $this);
        return Menu::make($this->items, $this->class);
    }

    public function add($key, $data)
    {
        array_set($this->items, $key, $data);
    }
}
