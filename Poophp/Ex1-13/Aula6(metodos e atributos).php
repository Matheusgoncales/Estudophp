<?php

class Login {
    public static $user;

    public static function VerificaLogin(){
        echo"O " .self::$user." está logado!";
    }
}

Login::$user = "Matheusadm";
Login::VerificaLogin();