<?php

namespace App\Controllers;

use Slim\Http\ServerRequest;
use App\Controllers\AbstractTwigController;
use \Psr\Http\Message\ResponseInterface;

class HomeController extends AbstractTwigController
{


    public function __construct($container)
    {
        parent::__construct($container);
    }

    /**
     * Return the "Home" view
     * @param Request $request
     * @param Response $response
     * @return HTML
     */
    public function home(ServerRequest $request, ResponseInterface $response)
    {
        return $this->render($response, 'home.twig');
    }

}
