<?php
error_reporting(E_ALL | E_STRICT);
/**
 * Setup autoloading
 */
require __DIR__ . '/../vendor/autoload.php';

define('APP_NAME', 'myApp');

define('ROOT', dirname(__DIR__) . '/');
define('APP_ROOT', ROOT . 'app/');
define('APP_CONFIG_FILE', APP_ROOT . 'config.php');

// View Smarty
define('TEMPLATE_DIR', ROOT . 'app/View/templates/');
define('COMPILE_DIR', ROOT . 'app/View/templates_c/');