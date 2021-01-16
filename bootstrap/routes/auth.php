<?php

use Slim\App;
use Slim\Routing\RouteCollectorProxy;
use App\Middleware\AuthMiddleware;
use App\Controllers\Auth\AuthController;


return function (App $app) {
    /**
     * Public authentication pages and functions
     */
    $app->group('/auth', function (RouteCollectorProxy $group) {
            $group->get('/signin', AuthController::class . ':getSignIn')
                    ->setName('auth.signin');
            $group->post('/signin', AuthController::class . ':postSignIn')
                    ->setName('auth.signin.post');
    });

    /**
     * Private authentication pages and functions
     */
    $app->group('/auth', function (RouteCollectorProxy $group) {
            $group->get('/signout', AuthController::class . ':getSignOut')
                    ->setName('auth.signout');
            $group->post('/password/change', AuthController::class . ':postChangePassword')
                    ->setName('auth.password.change.post');
    })->add(new AuthMiddleware($app));

};