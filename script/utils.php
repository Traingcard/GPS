<?php

function createCookie($name,$value){
    setcookie($name, $value, time() + (86400 * 30), "/");
}

function getCookie($name){
    if(isset($_COOKIE[$name])){
        return json_decode($_COOKIE[$name]);
    }
    return null;
}

function deleteCookie($name){
    setcookie($name, '', time() - 3600, "/");
}