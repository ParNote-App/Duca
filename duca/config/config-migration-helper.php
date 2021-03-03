<?php

function migrateConfig()
{
    global $config, $configVersion;

    if (!isset($config['config-version'])) { // from version 0 to 1
        require_once 'migration/0_1.php';

        migrationHandler_0_1();
    }

    if ($config['config-version'] !== $configVersion) {
        migrateConfig();
    } else {
        save_config();
    }
}