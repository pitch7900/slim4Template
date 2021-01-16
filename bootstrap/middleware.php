<?php

declare(strict_types=1);


use Slim\App;
use Slim\Views\TwigMiddleware;
use Slim\Views\Twig;


return function (App $app) {
    $container = $app->getContainer();
    $app->addMiddleware(TwigMiddleware::create($app, $container->get(Twig::class)));
    $app->addRoutingMiddleware();
};
