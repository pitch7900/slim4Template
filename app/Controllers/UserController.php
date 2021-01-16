<?php

namespace App\Controllers;

use App\Database\Users;
use Slim\Http\ServerRequest;
use \Psr\Http\Message\ResponseInterface;
use App\Authentication\Authentication;
use App\Controllers\AbstractTwigController;


class UserController extends AbstractTwigController
{


    public function __construct($container)
    {
        parent::__construct($container);
        $this->authentication = $container->get(Authentication::class);
    }


    public function postChangeDarkTheme(ServerRequest $request, ResponseInterface $response, $args)
    {
        $userid=intval($args['userid']);
        $user = Users::find($userid);
        $user->darktheme = !($user->darktheme);
        $user->save();
        return $this->withJSON($response, ['darktheme' => Users::find(Authentication::CurrentUserID())->darktheme]);
    }

    public function getCurrentUserJsonData(ServerRequest $request, ResponseInterface $response, $args)
    {
        $userinformations = array();

        $userinformations["userid"] = Authentication::CurrentUserID();
        $userinformations["username"] = Authentication::CurrentUserName();;
        $userinformations["userroleid"] = Authentication::CurrentUserRoleId();
        return $this->withJson($response, $userinformations);
    }


    public function deleteUser(ServerRequest $request, ResponseInterface $response, $args)
    {
        $userid = intval($args['userid']);

        $user = Users::find($userid);
        $user->forceDelete();
        $user->save();

        return $this->withJSON($response, ['deleted' => true]);
    }

    public function postChangeCredentials(ServerRequest $request, ResponseInterface $response, $args)
    {
        $userid = intval($args['userid']);
        $password = password_hash($request->getParsedBody()['password'], PASSWORD_DEFAULT);
        $login = $request->getParsedBody()['login'];
        $user = Users::find($userid);

        if (Authentication::isAdministrator() || Authentication::CurrentUserID() == $userid) {
            //is login already used by someone else
            if (is_null(Users::where('login', 'like', $login)
                ->where('id', '!=', $userid)->first())) {
                $user->login = $login;
                $this->flash->addMessage('info', 'Login changed');
            } else {
                $this->flash->addMessage('error', "Can't change login, already used");
            }

            if (strlen($request->getParsedBody()['password']) != 0) {
                $user->password = $password;
            }
            $user->save();
        }
        return $this->withRedirect($response, $_SERVER["HTTP_REFERER"], 303);
    }

    public function postAddUser(ServerRequest $request, ResponseInterface $response, $args)
    {

        $firstname = $request->getParsedBody()['firstname'];
        $lastname = $request->getParsedBody()['lastname'];
        $login = $request->getParsedBody()['login'];
        $password = password_hash($request->getParsedBody()['password'], PASSWORD_DEFAULT);

        //Create User without certificate
        if (is_null(Users::where('login', 'like', $login)->first())) {
            $user = Users::Create([
                'firstname' => $firstname,
                'lastanme' => $lastname,
                'login' => $login,
                'password' => $password,

            ]);

            $this->flash->addMessage('info', 'User ' . $login . 'Created under ID : ' . $user->id);
            $this->logger->debug("UserController>postAddUser $user->id created with $firstname, $lastname, $login");
        } else {
            $this->flash->addMessage('danger', 'User ' . $login . ' already exists ');
            $this->logger->debug("UserController>postAddUser : user CN or login already present");
        }


        return $this->withRedirect($response, '/user/all.html', 303);
    }

    /**
     * Check if login already exists
     * @param ServerRequest $request
     * @param ResponseInterface $response
     * @param type $args
     */
    public function postCheckLogin(ServerRequest $request, ResponseInterface $response, $args)
    {
        $login = $request->getParsedBody()['login'];
        $user = Users::where('login', 'like', $login)->first();
        if (is_null($user)) {
            return $this->withJSON($response, ['exist' => false]);
        } else {
            return $this->withJSON($response, ['exist' => true]);
        }
    }




    public function getCreateUserInterface(ServerRequest $request, ResponseInterface $response, $args)
    {
        return $this->render($response, 'user/add.twig');
    }


    public function getAllUsers(ServerRequest $request, ResponseInterface $response, $args)
    {
        return $this->render($response, 'user/all.twig');
    }
}