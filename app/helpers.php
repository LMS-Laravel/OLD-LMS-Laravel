<?php

function theme_path($theme = null)
{
    if(is_null($theme))
    {
        $theme = ucfirst(config('themes.default'));
    }

    return $theme;
}

function view_path($view, $theme = null)
{
    if(is_null($theme))
    {
        $theme = ucfirst(config('themes.default'));
    }
    return theme_path($theme) . ".views." . $view;
}

function asset_theme($resource, $theme = null)
{
    if(is_null($theme))
    {
        $theme = config('themes.default');
    }

    return asset('themes/' . $theme . '/'. $resource);
}