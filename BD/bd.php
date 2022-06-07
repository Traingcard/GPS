<?php

define('HOST','127.0.0.1');
define('USER','root');
define('PASS','');
define('DB','gps');

    $conexao=mysqli_connect('127.0.0.1','root','') or die('Não foi possível conectar');
    mysqli_select_db($conexao,"gps");
