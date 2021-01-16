<?php

namespace App\Middleware;


use \Psr\Http\Message\ServerRequestInterface;
use \Psr\Http\Message\ResponseInterface;
use Slim\Psr7\Factory\ResponseFactory;
use Psr\Http\Server\RequestHandlerInterface;
use Slim\App;
use App\Authentication\Authentication;
use Psr\Log\LoggerInterface;
/**
 * Description of AuthMiddleware
 *
 * @author pierre
 */
class AuthMiddleware
{
    /**
     * Logger interface
     * @var LoggerInterface;
     */
    private $logger;

    private $container;

    private $app;


    /**
     * @param App    $app
     */
    public function __construct(App $app)
    {
        $this->app = $app;
        $this->container = $this->app->getContainer();
        $this->auth = $this->container->get(Authentication::class);
        $this->logger = $this->container->get(LoggerInterface::class);

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
            return $response->withHeader('Location',  $this->getLoginPath())
                ->withStatus(303);
        }

        $response = $handler->handle($request);
        return $response;
    }
}
