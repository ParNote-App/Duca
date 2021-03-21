<?php

function migrationHandler_3_4()
{
    global $config;

    $config['config-version'] = 4;

    $config["email"] = $config["user-mail"];
    unset($config["user-mail"]);

    $config["intro-text"] = $config["welcome-text"];
    unset($config["welcome-text"]);

    $config["about-me"] = $config["description"];
    unset($config["description"]);

    $config["site-title"] = $config["tab-title"];
    unset($config["tab-title"]);

    $config["repo"] = $config["github-address-of-this-website"];
    unset($config["github-address-of-this-website"]);

    $config["profession"] = $config["job-title"];
    unset($config["job-title"]);

    $config["copyright"] = $config["product-year-and-name-surname"];
    unset($config["product-year-and-name-surname"], $config["facebook-address"], $config["github-address"], $config["linkedin-address"]);

}