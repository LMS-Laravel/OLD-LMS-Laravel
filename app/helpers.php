<?php

function theme_path($theme = 'default')
{
    return $theme;
}

function view_path($view, $theme = 'default')
{
    return theme_path($theme).'.views.'.$view;
}

function asset_theme($resource, $theme = 'default')
{
    return asset('themes/'.$theme.'/'.$resource);
}
