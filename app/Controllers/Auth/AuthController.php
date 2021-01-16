<?php

namespace App\Controllers\Auth;

use Slim\Http\ServerRequest as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use App\Controllers\AbstractTwigController;
use Psr\Container\ContainerInterface;
use App\Authentication\Authentication;

/**
 * AuthController
 *
 * @author    Haven Shen <havenshen@gmail.com>
 * @copyright    Copyright (c) Haven Shen
 */
class AuthController extends AbstractTwigController {


    /**
     * __construct
     *
     * @param  mixed $twig
     * @param  mixed $logger
     * @return void
     */
    public function __construct(ContainerInterface $container)
    {
        parent::__construct($container);
        // $this->logger->debug("AuthController::__construct() Constructor called");
    }

    public function getSignOut(Request $request, Response $response) {
        Authentication::logout();
        return $this->withRedirect($response,'/auth/signin',303);
    }

    public function getSignIn(Request $request, Response $response) {
        return $this->render($response, 'auth/signin.twig');
    }

    public function postSignIn(Request $request, Response $response) {

        $auth = Authentication::checkPassword(
                strtolower($request->getParam('login')), $request->getParam('password')
        );

        if (!$auth) {
            $this->flash->addMessage('danger', 'Wrong username or password');
            return $this->withRedirect($response,$this->getUrlFor($request,"auth.signin"));
        }

        return $this->withRedirect($response,$this->getUrlFor($request,"home"));
    }
}
