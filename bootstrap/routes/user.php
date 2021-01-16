<?php

use Slim\App;
use App\Middleware\AuthMiddleware;
use App\Controllers\UserController;
use Slim\Routing\RouteCollectorProxy;



return function (App $app) {
    /**
     * User's calls
     */
    $app->group('/user', function (RouteCollectorProxy $group) {
        $group->get('/all.html', UserController::class . ':getAllUsersInterface')
            ->setName('user.getAllUsers');
        $group->get('/add.html', UserController::class . ':getCreateUserInterface')
            ->setName('user.get.add');
        $group->get('/current.json', UserController::class . ':getCurrentUserJsonData')
            ->setName('user.getCurrentUserJsonData');
        $group->delete('/{userid}', UserController::class . ':deleteUser')
            ->setName('user.delete');
        $group->post('/add', UserController::class . ':postAddUser')
            ->setName('user.add');
        $group->post('/setcredentials/{userid}', UserController::class . ':postChangeCredentials')
            ->setName('user.post.setcrendentials');
        $group->post('/checklogin.json', UserController::class . ':postCheckLogin')
            ->setName('user.post.checklogin');
        $group->post('/{userid}/darktheme', UserController::class . ':postChangeDarkTheme')
            ->setName('user.post.darktheme');
    })->add(new AuthMiddleware($app));
};
