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
    } else if ($config['config-version'] === 2) { // from version 2 to 3
        require_once 'migration/2_3.php';

        migrationHandler_2_3();
    } else if ($config['config-version'] === 3) { // from version 3 to 4
        require_once 'migration/3_4.php';

        migrationHandler_3_4();
    } else if ($config['config-version'] === 4) { // from version 4 to 5
        require_once 'migration/4_5.php';

        migrationHandler_4_5();
    }

    if ($config['config-version'] !== $configVersion) {
        migrateConfig();
    } else {
        save_config();
    }
}