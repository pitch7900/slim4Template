<?php

declare(strict_types=1);

use App\Preferences;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Slim\Views\Twig;


use Slim\Flash\Messages;

return [
    LoggerInterface::class => function (ContainerInterface $container): LoggerInterface {
        // Get the preferences from the container.
        $preferences = $container->get(Preferences::class);

        // Instantiate a new logger and push a handler into the logger.
        $logger = new Logger('Template');
        $logger->pushHandler(
            new RotatingFileHandler(
                $preferences->getRootPath() . '/logs/log.log'
            )
        );

        return $logger;
    },
    Messages::class => function(ContainerInterface $container): Messages {
        return new Messages();
    },
    Twig::class => function (ContainerInterface $container): Twig {
        // Get the preferences from the container.
        $preferences = $container->get(Preferences::class);

        // Instantiate twig.
        $twig = Twig::create(
            $preferences->getRootPath() . '/resources/views',
            [
                'cache' => $preferences->getRootPath() . '/cache',
                'auto_reload' => true,
                'debug' => true,
            ]
        );
        $twig->addExtension(new \Twig\Extension\DebugExtension());
        require_once __DIR__.'/container-twigextensions.php';
        
        return $twig;
    },

];
