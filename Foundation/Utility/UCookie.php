<?php

class UCookie
{

    static function set_cookie(string $name, string $value = "", int $expires = 0, string $path = "", string $domain = "", bool $secure = false, bool $httponly = false){
        setcookie($name, $value, $expires, $path, $domain, $secure, $httponly);
    }

    static function get_cookie_value(string $name){
        return $_COOKIE[$name];
    }

    static function unset_cookie($name){
        unset($_COOKIE[$name]);
    }

    static function isset_cookie($name): bool{
        return isset($_COOKIE[$name]);
    }

}