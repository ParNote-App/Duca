<?php

function route_this_page_router($uri)
{
    if (strpos($uri, '/') !== 0 || strpos($uri, "/template/") === 0) {
        return false;
    }

    $filePath = __page_router_get_total_path($uri);

    return is_file($filePath) && file_exists($filePath);
}

function get_page_router_handler($uri)
{
    $filePath = __page_router_get_total_path($uri);

    /** @noinspection PhpIncludeInspection */
    require_once $filePath;
}

function __page_router_get_total_path($uri)
{
    $filePathPieces = explode('/', $uri, 2);

    return DUCA_THEME_ROOT . $filePathPieces[1] . ".php";
}
