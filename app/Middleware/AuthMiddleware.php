<?php

namespace App\Middleware;

use Slim\App;
use App\Authentication\Authentication;
use Slim\Psr7\Factory\ResponseFactory;
use App\Controllers\AbstractController;
use \Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use \Psr\Http\Message\ServerRequestInterface;

/**
 * Description of AuthMiddleware
 *
 * @author pierre
 */
class AuthMiddleware extends AbstractController
{
    /**
     * Logger interface
     * @var LoggerInterface;
     */
    
    private $app;


    /**
     * @param App    $app
     */
    public function __construct(App $app)
    {
        $this->app = $app;
        $container = $this->app->getContainer();
        $this->auth = $container->get(Authentication::class);
    

        parent::__construct($container);
    }
    /**
     * getLoginPath : Return the login path
     *
     * @return string
     */
    private function getLoginPath(): string
    {
        $routeParser = $this->app->getRouteCollector()->getRouteParser();
        $signinroute = $routeParser->urlFor('auth.signin');
        return $signinroute;
    }

    public function __invoke(ServerRequestInterface  $request, RequestHandlerInterface  $handler): ResponseInterface
    {

        if (!Authentication::IsAuthentified()) {
            $responseFactory = new ResponseFactory();
            $response = $responseFactory->createResponse();
            return $this->withRedirect($response,$this->getLoginPath(),303);
        }

        $response = $handler->handle($request);
        return $response;
    }
}
