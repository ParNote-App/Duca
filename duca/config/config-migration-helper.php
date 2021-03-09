<?php

function migrateConfig()
{
    global $config, $configVersion;

    if (!isset($config['config-version'])) { // from version 0 to 1
        require_once 'migration/0_1.php';

        migrationHandler_0_1();
    } else if ($config['config-version'] === 1) { // from version 1 to 2
        require_once 'migration/1_2.php';

        migrationHandler_1_2();
    }

    if ($config['config-version'] !== $configVersion) {
        migrateConfig();
    } else {
        save_config();
    }
}