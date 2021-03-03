<?php

require 'vendor/autoload.php';

require_once DUCA_APP_ROOT . 'config/config-loader.php';

load_config();

require_once DUCA_APP_ROOT . 'util/util-loader.php';

require_once DUCA_APP_ROOT . 'router/router.php';

handle_router();