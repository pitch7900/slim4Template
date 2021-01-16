<?php


use Slim\App;

use App\Middleware\AuthMiddleware;
use App\Controllers\HomeController;


return function (App $app) {
        /**
         * Menu's calls
         */
        $app->get('/', HomeController::class . ':home')
                ->add(new AuthMiddleware($app))
                ->setName('home');       
};
