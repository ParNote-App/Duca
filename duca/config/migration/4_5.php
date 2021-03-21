<?php

function migrationHandler_4_5()
{
    global $config;

    $config['config-version'] = 5;

    $config["photo-url"] = "/assets/img/user.jpg";

}