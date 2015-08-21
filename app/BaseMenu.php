<?php namespace App;



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
     * Specify Items Menu
     * @return string
     */
    abstract function items();


    public function boot()
    {
        return \Menu::make($this->items(), $this->class);
    }
}