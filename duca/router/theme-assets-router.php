<?php

defined('DUCA_THEME_ASSETS_ROOT') or define('DUCA_THEME_ASSETS_ROOT', DUCA_THEME_ROOT . "assets/");

function route_this_theme_asset_router($uri)
{
    if (strpos($uri, '/assets/') !== 0) {
        return false;
    }

    $filePath = __theme_assets_router_get_total_path($uri);

    return is_file($filePath) && file_exists($filePath);
}

function get_theme_assets_router_handler($uri)
{
    $filePath = __theme_assets_router_get_total_path($uri);

    read_file($filePath);
}

function __theme_assets_router_get_total_path($uri)
{
    $filePathPieces = explode('/assets/', $uri, 2);

    return DUCA_THEME_ASSETS_ROOT . $filePathPieces[1];
}
