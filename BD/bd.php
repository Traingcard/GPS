<?php
    $ligax=mysqli_connect('127.0.0.1','root','');
        if(!$ligax)
        {
            echo '<p> Erro: Falha na ligação.';
            exit;
        }
    mysqli_select_db($ligax,"gps");
?>