<?php

namespace App\Authentication;

use App\Authentication\SslAuth;
use App\Database\Users;
use App\Database\Permissions;
use App\Database\Roles;

class Authentication
{

    static public $ADMINISTRATOR = 1;
    static public $EDITOR = 2;
    static public $READER = 3;



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
            if (SslAuth::is_SSLClientAuth()) {
                $_SESSION['user'] = SslAuth::get_userid();
                return intval($_SESSION['user']);
            } else {
                return -1;
            }
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
        if (SslAuth::is_SSLClientAuth() && isset($_SESSION['user'])){
            return true;
        }
       
    }
  
 
    /**
     * GetRoleID from RoleName
     * if no match return a default "reader" only roleid
     * @param  string $rolename
     * @return int
     */
    public static function GetRoleID(string $rolename):int
    {
        switch ($rolename) {
            case "administrator":
                $roleid = Authentication::$ADMINISTRATOR;
                break;
            case "editor":
                $roleid = Authentication::$EDITOR;
                break;
            case "reader":
                $roleid = Authentication::$READER;
                break;
            default:
                $roleid = Authentication::$READER;
                break;
        }
        return $roleid;
    }

    /**
     * Return current user roleid
     * @return integer
     */
    public static function CurrentUserRoleId()
    {
        return Permissions::getPermission(Authentication::CurrentUserID());
    }

    /**
     * Return current user rolename
     * rolename can be : 
     *  - administrator
     *  - editor
     *  - reader
     * @return string
     */
    public static function CurrentUserRoleName()
    {

        $roleid = Permissions::getPermission(Authentication::CurrentUserID());

        switch ($roleid) {
            case Authentication::$ADMINISTRATOR:
                $rolename = "administrator";
                break;
            case Authentication::$EDITOR:
                $rolename = "editor";
                break;
            case Authentication::$READER:
                $rolename = "reader";
                break;
            default:
                $rolename = "reader";
                break;
        }
        return $rolename;
    }


 
    /**
     * Return true if current user has administrator privileges
     * @return boolean
     */
    public static function isAdministrator()
    {
        return Permissions::getPermission(Authentication::CurrentUserID()) == Authentication::$ADMINISTRATOR;
    }

    /**
     * Return true if current user has editor privileges
     * @return boolean
     */
    public static function isEditor()
    {
        return Permissions::getPermission(Authentication::CurrentUserID()) <= Authentication::$EDITOR;
    }


    /**
     * Return true if current user has editor privileges
     * @return boolean
     */
    public static function isReader()
    {
        return Permissions::getPermission(Authentication::CurrentUserID()) <= Authentication::$READER;
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
     * Return true if current user wants adult content
     * @return boolean
     */
    public static function UserWantsAdultContent()
    {
        $user = Users::find(Authentication::CurrentUserID());
        if (!is_null($user)) {
            return boolval($user->userwants_adult_content);
        } else {
            return false;
        }
    }


    /**
     * AdultContentAllowed
     * Return true if current user is allowed to display adult content
     *
     * @return bool
     */
    public static function AdultContentAllowed(): bool
    {
        $user = Users::find(Authentication::CurrentUserID());
        if (!is_null($user)) {
            return boolval($user->allow_adult_content);
        } else {
            return false;
        }
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
