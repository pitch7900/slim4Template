<?php

declare(strict_types=1);


use Twig\TwigFunction;

use App\Database\Users;

use Slim\Flash\Messages;
use App\Config\Languages;
use App\Authentication\Authentication;


return [
    $twig->getEnvironment()->addGlobal('auth', [
        'check' => Authentication::IsAuthentified(),
        'user' => Authentication::CurrentUserID()
    ]),
    //Notification for Flash
    $twig->getEnvironment()->addGlobal('notification', $container->get(Messages::class)),

    $twig->getEnvironment()->addGlobal('user', [
        'username' => Authentication::CurrentUserName(),
        'getuserid' => Authentication::CurrentUserID(),
        'darktheme' => Users::isDarkTheme(),
        
    ]),
    $twig->getEnvironment()->addGlobal('users', [
        'getList' => Users::select('id','login','password','firstname', 'lastname','darktheme')
            ->get()
            ->toArray()
    ]),
    //For Translations
    $twig->getEnvironment()->addFunction(new TwigFunction('getText', function ($text) {
        return Languages::getText($text);
    })),

 
];
