<?php

global $configVersion, $config;

$configVersion = 4;

$config = array();
$configFilePath = DUCA_ROOT . '/config/config.json';

function load_config()
{
    global $config, $configVersion, $configFilePath;

    if (!file_exists($configFilePath)) {
        touch($configFilePath);
        chmod($configFilePath, fileperms($configFilePath) | 128 + 16 + 2);
        save_config();
    } else {
        $GLOBALS['config'] = json_decode(file_get_contents($configFilePath), true);
    }

    if (!isset($config['config-version']) || $config['config-version'] !== $configVersion) {
        require_once 'config-migration-helper.php';

        migrateConfig();
    }
}

function save_config()
{
    global $config, $configFilePath;

    file_put_contents($configFilePath, json_encode($config, JSON_PRETTY_PRINT));
}

