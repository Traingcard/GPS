<?php
header('Content-Type: application/json');
require_once('./utils.php');


// echo $user->password;
$aResult = array();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $user = getCookie('user');

    if(!isset($user)){
        $aResult['error'] = 'Sem parametros!';
    } else {
        $aResult['success'] = $user;
    }
} else {
    $aResult['error'] = 'Ups! Algo deu errado!';
}

echo json_encode($aResult);
