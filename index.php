<?php
include "./BD/bd.php";
require_once('./script/utils.php');
$user = getCookie('user');
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <link rel="stylesheet" href="./script/css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">

    <title>
        Departamento de Informática
    </title>

    <script src="./script/utils.js"></script>
    <script src="./script/middleware.js"></script>
</head>


<style>
    * {

        margin: auto;
        padding: auto;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        font-family: 'Open Sans', sans-serif;
        font-size: 20pt;
    }

    header {
        background-color: white;
        width: 100%;
        height: 90px;
        display: flex;
    }

    .divLogo {
        height: 100%;
        flex: 1;
    }

    .divNome {
        height: 100%;
        flex: 1;
        padding-top: 35px;
        padding-left: 220px;
        color: black;
    }

    .divLogin {
        height: 100%;
        width: 33%;
        flex: 1;
        display: flex;
    }

    .headerImg {
        margin-top: 5px;
        margin-left: 390px;
        width: auto;
        height: 32px;
    }

    #img-header {
        width: 150px;
        height: 70px;
        margin: 13px;
    }

    body {
        background-image: url('../GPS/Imagens/a.png');
        background-repeat: no-repeat;
        background-size: cover;
        height: 900px;

    }

    .gallery {
        margin-top: 11%;
    }

    .gallery-cell {
        width: 350px;
        height: 350px;
        margin-right: 100px;
        background: white;
        border-radius: 100%;
    }

    /* cell number */
    .gallery-cell:before {
        display: block;
        text-align: center;
        line-height: 200px;
        font-size: 80px;
        color: white;
    }

    #menu {
        width: 100%;
        height: auto;
        margin: 0;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }

    footer {
        background-color: #25a5ae;
        color: white;
        height: 90px;
        width: 100%;
        position: fixed;
        bottom: 0px;
        display: flex;
    }

    .divTelemovel {
        height: 100%;
        width: 33%;
        display: flex;
    }

    .divEmail {
        height: 100%;
        width: 33%;
        flex: 1;
        display: flex;
    }

    .divLocal {
        height: 100%;
        width: 33%;
        flex: 1;
        display: flex;
    }

    .footerImg {
        margin-top: 20px;
        margin-left: 190px;
        width: auto;
        height: 50px;
    }

    .FooterTexto {
        padding-left: 20px;
        width: 10px;
        flex: 1;
    }
</style>


<body onload="middleware()">
    <header>
        <div class="divLogo">
            <a href="./"><img src="Imagens/di.png" alt="Departamento de Informática" id="img-header"></a>
        </div>
        <div class="divNome">
            <imput>INSTITUTO POLITÉCNICO DE VISEU</imput>
        </div>
        <?php
        if (isset($user)) {
            echo '<div class="divLogin">
            <a href="./script/logout.php">Logout</a>
            </div>';
        } else {
            echo "
            <div class='divLogin'>
                <a href='../GPS/login.php'><img class='headerImg' src='Imagens/user.png' alt='Departamento de Informática'></a>
            </div>
            ";
        }
        ?>
    </header>


    <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>

        <?php

        $select = "SELECT * FROM curso";
        $result = mysqli_query($conexao, $select);
        $nregistos = mysqli_num_rows($result);

        for ($i = 0; $i < $nregistos; $i++) {
            $registo = mysqli_fetch_assoc($result);
            $id_curso = $registo['id_curso'];
            $nome = $registo['nome'];
            $imagem = $registo['imagem'];

            echo "<div class='gallery-cell'><a href='./About.php?id_curso=$id_curso'><img id='menu' src='$imagem'/></a></div>";
        }

        //TODO: VER SE ESTÁ LOGADO, SE ESTIVER APARECER A SEGUINTE DIV COM HIPERLIGAÇÃO PARA O ADDCURSO PARA ADICIONAR CURSOS
        if (isset($user)) {
            if ($user->isAdmin == 1) {

                echo "<div class='gallery-cell'><a href='./AddCurso.php'><img id='menu' src='./Imagens/Adicionar.png'/></a></div>";
            }
        }
        ?>


    </div>



    <footer>
        <div class="divTelemovel">
            <img class="footerImg" src="../GPS/Imagens/movel.png">
            <imput class="FooterTexto">+351 232 480 533</imput>
        </div>
        <div class="divEmail">
            <img class="footerImg" src="../GPS/Imagens/mail.png">
            <imput class="FooterTexto">sec-di@estgv.ipv.pt</imput>
        </div>
        <div class="divLocal">
            <img class="footerImg" src="../GPS/Imagens/localizacao.png">

            <imput class="FooterTexto">Av. Cidade Politécnica, Viseu</imput>
        </div>
    </footer>
    <script src="./script/flickity.pkgd.min.js"></script>
    <!-- Code injected by live-server -->
    <script type="text/javascript">
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function() {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function(msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        } else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
        // ]]>
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</body>

</html>