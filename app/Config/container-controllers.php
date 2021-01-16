<?php

declare(strict_types=1);


use Psr\Container\ContainerInterface;

use App\Controllers\Auth\AuthController;
use App\Controllers\HomeController;
use App\Controllers\UserController;

return [
    AuthController::class => function (ContainerInterface $container): AuthController {
        return new AuthController($container);
    },
    UserController::class => function (ContainerInterface $container): UserController {
        return new UserController($container);
    },
    HomeController::class => function (ContainerInterface $container): HomeController {
        return new HomeController($container);
    }
];
