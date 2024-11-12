<?php

use Pecee\SimpleRouter\SimpleRouter;

require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


define('ROOT', __DIR__);

define('ASSET_DIR', __DIR__ . '/assets');

define('BASE_DIR', isset($_ENV['BASE_DIR']) ? $_ENV['BASE_DIR'] : '/RawPHP/portfolio');

define('URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/' . BASE_DIR);
//URL = http://localhost/RawPHP/portfolio/

define('ASSET_URL', URL . '/assets');


/* Load external routes file */
require_once 'routes/routes.php';

/**
 * The default namespace for route-callbacks, so we don't have to specify it each time.
 * Can be overwritten by using the namespace config option on your routes.
 */


SimpleRouter::setDefaultNamespace('\src\Controllers');


/* Start the routing */
SimpleRouter::start();
