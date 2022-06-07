<?php

define('HOST','185.27.134.10');
define('USER','epiz_31907810');
define('PASS','NoJ3PPUbaq4a');
define('DB','epiz_31907810_gps');

    $conexao=mysqli_connect(HOST,USER ,PASS) or die('Não foi possível conectar');
    mysqli_select_db($conexao,DB);
?>