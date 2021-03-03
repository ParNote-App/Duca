<?php

global $config;

defined('DUCA_THEME_ROOT') or define('DUCA_THEME_ROOT', DUCA_ROOT . '/themes/' . $config["theme"] . "/");

$requestURL = $_SERVER['REQUEST_URI'];

function get_default_handler()
{
    global $config;

    /** @noinspection PhpIncludeInspection */
    require_once DUCA_ROOT . "/themes/" . $config["theme"] . "/index.php";
}

function handle_router()
{
    global $requestURL;

    require_once 'assets-router.php';

    if (route_this_asset_router($requestURL)) {
        get_assets_router_handler($requestURL);
    } else {
        require_once 'theme-assets-router.php';

        if (route_this_theme_asset_router($requestURL)) {
            get_theme_assets_router_handler($requestURL);
        } else {
            require_once "page-router.php";

            if (route_this_page_router($requestURL)) {
                get_page_router_handler($requestURL);
            } else if ($requestURL === "/") {
                get_default_handler();
            } else {
                Redirect("/error404");
            }
        }
    }
}
