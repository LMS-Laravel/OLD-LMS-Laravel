<?php

function theme_path($theme = null)
{
    if(is_null($theme))
    {
        $theme = config('themes.default');
    }

    return ucfirst($theme);
}

function view_path($view, $theme = null)
{
    if(!is_null($theme))
    {
        $theme = theme_path($theme);
    }
    return $theme . $view;
}

function asset_theme($resource, $theme = null)
{
    if(is_null($theme))
    {
        $theme = config('themes.default');
    }

    return asset('themes/' . $theme . '/'. $resource);
}