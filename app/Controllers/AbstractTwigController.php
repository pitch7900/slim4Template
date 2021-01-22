<?php

namespace App\Controllers;

use Slim\Views\Twig;
use Slim\Flash\Messages;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;

abstract class AbstractTwigController extends AbstractController
{
    /**
     * @var Twig
     */
    protected $twig;
    protected $flash;

    /**
     * AbstractController constructor.
     *
     * @param Twig $twig
     */
    public function __construct(ContainerInterface $container)
    {
        parent::__construct($container);
        $this->twig = $container->get(Twig::class);
        $this->flash = $container->get(Messages::class);
        
    }

    /**
     * Render the template and write it to the response.
     *
     * @param Response $response
     * @param string   $template
     * @param array    $renderData
     *
     * @return Response
     */
    protected function render(ResponseInterface $response, string $template, array $renderData = []): ResponseInterface
    {
        return $this->twig->render($response, $template, $renderData)
            ->withHeader('Cache-Control', 'no-cache, must-revalidate')
            ->withHeader('Expires','Mon, 26 Jul 1997 05:00:00 GMT');
    }
       

    
}
