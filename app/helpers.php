<?php

function theme_path($theme = 'default')
{
    return "themes.$theme";
}

function view_path($view)
{
    return theme_path() . ".views." . $view;
}