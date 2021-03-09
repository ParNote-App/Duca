<?php

function migrationHandler_1_2()
{
    global $config;

    $config['config-version'] = 2;

    $config['live-reload'] = true;
}