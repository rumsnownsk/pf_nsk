<?php

function redirect($http = false){
    if ($http){
        $redirect = $http;
    } else {
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/';
    }
    header("Location: $redirect");
    exit;
}

function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

function __($key){
    echo \app\core\base\Lang::get($key);
}

function dateDMY($tUnix){
    return date("d-m-Y", $tUnix);
}

function checkPhoto($work){
    dd($work);
}