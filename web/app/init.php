<?php

require_once '../vendor/autoload.php';

// Config
define('ROOT', dirname(__DIR__) . '/' . '/');

// App Config
define('APP_NAME', 'myApp');
define('APP_ROOT', ROOT . 'app/');
define('APP_PROTOCOL', stripos($_SERVER['SERVER_PROTOCOL'], 'https') === true ? 'https://' : 'http://');
define('APP_URL', APP_PROTOCOL . $_SERVER['HTTP_HOST']);
define('APP_CONFIG_FILE', APP_ROOT . 'config.php');

// Public Config
define('PUBLIC_ROOT', ROOT . 'public_html/');

// Controller Config
define('CONTROLLER_PATH', "\App\Controller\\");
define('DEFAULT_CONTROLLER', CONTROLLER_PATH . 'Index');
define('DEFAULT_CONTROLLER_ACTION', 'index');

// View Smarty
define('TEMPLATE_DIR', ROOT . 'app/View/templates/');
define('COMPILE_DIR', ROOT . 'app/View/templates_c/');

// Routes
define('ROUTES', [
    '/' => 'App\Controller\Index@index',
    '/login' => 'App\Controller\Login@login',
    '/logout' => 'App\Controller\Login@logout',
    '/registration' => 'App\Controller\Registration@registration',
    '/loginWithCookie' => 'App\Controller\Login@loginWithCookie',
    '/ru' => 'App\Controller\Index@index',
    '/ru/login' => 'App\Controller\Login@login',
    '/ru/logout' => 'App\Controller\Login@logout',
    '/ru/registration' => 'App\Controller\Registration@registration',
]);
