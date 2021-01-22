<?php

namespace App\Authentication;

use App\Database\Users;

class Authentication
{


    /**
     * CurrentUserID
     *
     * @return int
     */
    public static function CurrentUserID(): int
    {

        if (isset($_SESSION['user'])) {
            return intval($_SESSION['user']);
        } else {
            return -1;
        }
    }

    /**
     * IsAuthentified
     *
     * @return bool
     */
    public static function IsAuthentified(): bool
    {
        if (isset($_SESSION['user'])) {
            return true;
        } else {
            return false;
        }
    }


    /**
     * return current user name
     * @return string
     */
    public static function CurrentUserName()
    {
        return Users::getUserName(Authentication::CurrentUserID());
    }


    /**
     * checkPassword - Check Password
     *
     * @param  mixed $login
     * @param  mixed $password
     * @return void
     */
    public static function checkPassword($login, $password)
    {
        $user = Users::where('login', '=', $login)->first();
        if (!is_null($user)) {
            if (password_verify($password, $user->password)) {
                $_SESSION['user'] = $user->id;
                return true;
            }
        }
        return false;
    }

    public static function logout()
    {
        unset($_SESSION['user']);
    }
}
