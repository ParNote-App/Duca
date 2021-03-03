<?php

defined('DUCA_ASSETS_ROOT') or define('DUCA_ASSETS_ROOT', DUCA_ROOT . '/assets/');

function route_this_asset_router($uri)
{
    if (strpos($uri, '/assets/') !== 0) {
        return false;
    }

    $filePath = __assets_router_get_total_path($uri);

    return is_file($filePath) && file_exists($filePath);
}

function get_assets_router_handler($uri)
{
    $filePath = __assets_router_get_total_path($uri);

    read_file($filePath);
}

function __assets_router_get_total_path($uri)
{
    $filePathPieces = explode('/assets/', $uri, 2);

    return DUCA_ASSETS_ROOT . $filePathPieces[1];
}
