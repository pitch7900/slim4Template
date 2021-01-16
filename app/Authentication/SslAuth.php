<?php

namespace App\Authentication;

use App\Database\Users;

require_once __DIR__.'/../../vendor/ralouphie/getallheaders/src/getallheaders.php';
class SslAuth
{


    private static function ExtractSSLHeaders(): array
    {
        $returnarray = array();
        $returnarray['CA'] = null;
        $returnarray['CN'] = null;
        $returnarray['VERIFIED'] = false;
        $returnarray['SSL_CLIENT_CERT'] = null;
        $user = null;
        if (function_exists('getallheaders')) {
            $allheaders = getallheaders();
            foreach ($allheaders as $name => $value) {
                if (strcmp($name, "SSL_CLIENT_I_DN") == 0) {
                    $returnarray['CA'] = $value;
                } 
                if (strcmp($name, "SSL_CLIENT_S_DN") == 0) {
                    $returnarray['CN'] = $value;
                } 
                if (strcmp($name, "SSL_CLIENT_VERIFIED") == 0 && strcmp($value, "TRUE") == 0) {
                    $returnarray['VERIFIED'] = true;
                } 
                if (strcmp($name, "SSL_CLIENT_CERT") == 0) {
                    $returnarray['SSL_CLIENT_CERT'] = $value;
                } 
            }
        }

        if (!is_null($returnarray['CN'])) {
            $user = Users::where('cn', 'like', $returnarray['CN'])->first();
        }
        if (is_null($user)) {
            $returnarray['VERIFIED'] = false;
            $returnarray['USERID'] = null;
        } else {
            $returnarray['VERIFIED'] = true;
            $returnarray['USERID'] = $user->id;
            $_SESSION['user']= $user->id;
        }
        return $returnarray;
    }



    /**
     * Return true if current user is authentificateded
     * @return boolean
     */
    public static function is_SSLClientAuth(): bool
    {
        $headers = SslAuth::ExtractSSLHeaders();
        if (isset($headers['VERIFIED'])) {
            return $headers['VERIFIED'];
        } else {
            return false;
        }
    }




    /**
     * Return current userid
     * @return integer
     */
    public static function get_userid()
    {
        return SslAuth::ExtractSSLHeaders()['USERID'];
    }



}
