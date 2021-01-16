<?php


use Dotenv\Dotenv;
use App\ContainerFactory;
use App\Database\Settings;
use Slim\Factory\AppFactory;
use App\Utils\UpgradeDBHelper;
use Dotenv\Exception\InvalidPathException;
use Mouf\Utils\Session\SessionHandler\OptimisticSessionHandler;


$currentdbversion = 4;
// Set the absolute path to the root directory.
$rootPath = realpath(__DIR__ . '/..');
// Set the default timezone.
date_default_timezone_set('Europe/Zurich');

require __DIR__ . '/../vendor/autoload.php';


try {
    $dotenv = Dotenv::createMutable($rootPath . '/config/');
    $dotenv->load();
} catch (InvalidPathException $e) {
    die("Unable to load configuration file");
}

//Load DB configuration
require_once __DIR__ . '/database.php';

session_cache_limiter('public');

ini_set("session.cookie_httponly", 1);
session_name('CFID');
//If optimisticsessionhandlers is set, then use it.
if (isset($_ENV['OPTIMISTICSESSIONSHANDLER'])) {
    if (boolval($_ENV['OPTIMISTICSESSIONSHANDLER'])) {
        $sessionhandler = new OptimisticSessionHandler();
        session_set_save_handler($sessionhandler, true);
        session_start(['read_and_close' => true]);
    } else {
        session_start();
    }
} else {
    session_start();
}

// Create the container for dependency injection.
try {
    $container = ContainerFactory::create($rootPath);
} catch (Exception $e) {
    die($e->getMessage());
}


// Set the container to create the App with AppFactory.
AppFactory::setContainer($container);
$app = AppFactory::create();

// Set the cache file for the routes. Note that you have to delete this file
// whenever you change the routes.
// $app->getRouteCollector()->setCacheFile(
//     $rootPath . '/cache/routes.cache'
// );

//Call middleware functions
$_SERVER['app'] = &$app;

if (!function_exists('app')) {
    function app()
    {
        return $_SERVER['app'];
    }
}

//Add Middlewares
(require __DIR__ . '/middleware.php')($app);

// Register routes
(require __DIR__ . '/routes.php')($app);



// Add error handling middleware.
$displayErrorDetails = true;
$logErrors = true;
$logErrorDetails = false;
$app->addErrorMiddleware($displayErrorDetails, $logErrors, $logErrorDetails);