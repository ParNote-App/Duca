<?php

function migrationHandler_0_1()
{
    global $config;

    $config['config-version'] = 1;

    $config['theme'] = 'default';
}