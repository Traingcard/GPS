<?php
header('Content-Type: application/json');

include('../BD/bd.php');
require_once('./utils.php');

// $user = getCookie('user');
// echo $user->password;
$aResult = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $aResult['error'] = 'Sem parametros!';
    } else {
        $select = "SELECT * FROM utilizador WHERE password = '$password' AND username = '$username'";
        $query = mysqli_query($conexao, $select) or die("ERRO AO PESQUISAR");
        $conta_existe = mysqli_num_rows($query);
        $linha = mysqli_fetch_array($query);

        if ($conta_existe > 0) {

            $user = new stdClass();
            $user->username = $linha['username'];
            $user->password = $linha['password'];
            $user->email = $linha['email'];
            $user->dataNascimento = $linha['dataNascimento'];
            $user->isAdmin = $linha['isAdmin'];

            createCookie('user', json_encode($user));

            $aResult['success'] = json_encode($user);
        } else {
            $aResult['error'] = 'Conta inválida!';
        }
    }
} else {
    $aResult['error'] = 'Conta inválida!';
}

echo json_encode($aResult);