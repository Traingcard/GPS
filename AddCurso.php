<!DOCTYPE html>
<html lang="pt">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <link rel="stylesheet" href="./script/css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">

    <title>
        Variável
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

    #header-login {
        margin-top: 12.5px;
        margin-right: 20px;
        font-size: 4em;
        float: right;
        text-decoration: none;
    }

    .pag {
        background-color: white;
        width: 100%;
        height: auto;
    }

    .cursoBanner {
        width: 96%;
        height: 450px;
        padding: 2%;
        background-color: rgba(128, 128, 128, 0.603);
    }

    .logo {
        background-color: #218896;
        width: 600px;
        height:200px;
        border-radius: 5%;
        margin-left: 150px;
        float: left;
        margin-right: 200px;
        
    }

    #input-img {
       margin-top: 75px;
       
    }

    .banner {
       
    }

    #banner-titulo {
        font-size: 20pt;
        float: right;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bolder;
    }

    #h2introducao {
        margin: 50px;
    }

    #input-normal {
        font-size: 20px;
    }

    #texto-introducao {
        margin: 50px;
        letter-spacing: 1.5px;
        font-size: 1.5em;
    }

    .meiopag {
        width: 100%;
        height: 550px;
        background-image: url("Imagens/ESTGV.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position-y: -500px;
    }

    #titulo {
        width: 795px;
        height: 278px;
        font-size: 1.5em;
    }


    .ingresso {
        width: 100%;
        height: auto;
        color: white;
        overflow: hidden
    }

    #texto-ingresso {
        background-color: rgba(128, 128, 128, 0.603);
        margin: 100px;
        padding: 100px;
        letter-spacing: 1.5px;
        font-size: 1.5em;
        border-radius: 25px;
    }

    #h2-ingresso {
        text-align: center;
        margin-top: 0pxx;
    }

    .horarios {
        margin-top: -100px;
    }


    #table-horarios {
        background-color: grey;
        width: 1500px;
        text-align: center;
        margin-left: 200px;

    }

    tr {
        border-color: black;

    }

    .primeiro-semestre {
        padding: 15px;
        border-color: black;
        border-bottom: 1px solid black;
        border-right: 1px solid black;
        vertical-align: center;
    }

    .segundo-semestre {
        padding: 15px;
        border-color: black;
        border-bottom: 1px solid black;
        border-left: 1px solid black;
        vertical-align: center;
    }


    #horario-titulo {
        margin-top: 100px;
        text-align: center;
        margin-bottom: 30px;
    }

    #texto-contactar {
        width: 33%;
        font-size: 50px;
        margin-left: 12.5%;
        overflow: hidden;
        float: left;
    }

    .fromDiv {
        width: 100%;
        height: auto;
        color: white;
        overflow: hidden
    }

    .formBox {
        background-color: rgba(128, 128, 128, 0.603);
        margin: 100px;
        padding-top: 50px;
        padding-bottom: 50px;
        letter-spacing: 1.5px;
        font-size: 1.5em;
        border-radius: 25px;
        display: flex;
        height: auto;
    }

    .leftText {
        height: 100%;
        width: 50%;
        padding-left: 50px;
        padding-top: 190px;
        font-size: larger;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
    }

    .formTable {
        height: 100%;
        width: auto;
        flex-grow: 1;
        padding-left: 65px;
    }

    .formImput {
        margin-top: 20px;
        width: 500px;
        height: 50px;
        border-radius: 20px;
        text-align: center;
        font-size: 30px;
        background-color: white;
        border: none;
        color: black;
    }

    .formImputText {
        margin-top: 20px;
        width: 500px;
        height: 100px;
        border-radius: 20px;
        text-align: center;
        font-size: 30px;
        background-color: white;
        border: none;
        color: black;
        padding-top: 50px;
    }

    .formImputSubmit {
        margin-top: 30px;
        width: 300px;
        height: 50px;
        border-radius: 20px;
        text-align: center;
        font-size: 30px;
        font-weight: bolder;
        background-color: #25a5ae;
        border: none;
        color: white;
        margin-left: 13%;
    }

    footer {
        background-color: #25a5ae;
        height: 250px;
    }

    #esquerda {
        float: left;
        text-align: left;
        width: 33%;
    }

    #meio {
        float: left;
        text-align: center;
        width: 33%;
        margin-top: 75px;
        color: white;
    }

    #direita {
        float: right;
        text-align: right;
        width: 33%;
    }

    #formatacao-footer {
        padding: 15px;
        padding-left: 40px;
        padding-right: 40px;
    }

    #img-footer {
        margin-top: 10px;
    }

    #strong-margin-left {
        font-size: 20px;
        margin-top: -33px;
        margin-left: 70px;
        font-weight: bolder;
        color: white;
    }

    #strong-margin-right {
        font-size: 20px;
        margin-top: -35px;
        font-weight: bolder;
        color: white;
    }

    #img-footer-right {
        margin-right: 110px;
        margin-top: 10px;
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

        <div class="divLogin">
            <a href="./script/logout.php">Logout</a>
        </div>

    </header>


    <div class="pag">

        <div class="cursoBanner">

            <!-- TODO INSERIR IMAGEM NA BD/PASTA, TABELA IMAGEM -->
            <div class="logo">
                <input id="input-img" type="file" />
            </div>


            <div class="banner">

                <!-- TODO: INSERIR NA BD, CAMPO NOMME  -->
                <div id="banner-titulo">

                    <textarea id="titulo" cols="14" rows="2"></textarea>

                </div>
            </div>

        </div>

        <div class="introducao">

            <h2 id="h2introducao">Introdução</h2>
            <!-- TODO: INSERIR NA BD, CAMPO INTRODUCAO -->
            <div id="texto-introducao">
                <p></p> <textarea id="input-normal" cols="162" rows="20"></textarea>
            </div>
        </div>
        <div class="meiopag">

        </div>

        <div class="ingresso">

            <div id="texto-ingresso">
                <h2 id="h2-ingresso"> Ingresso </h2>

                <!-- TODO: INSERIR NA BD O CAMPO INGRESSO -->

                <textarea id="input-normal" cols="135" rows="20"> </textarea>

            </div>
        </div>

        <div class="form">

        </div>


        <!-- TODO: INSERIR HORÁRIO DO CURSO, CADA SEMESTRE TEM UM INPUT -->

        <div class="horarios">
            <h2 id="horario-titulo"> Horários </h2>

            <h3 id="horario-titulo"> 1º Ano </h3>

            <table id="table-horarios" width="1000px">
                <tr>
                    <td class="primeiro-semestre">
                        1º Semestre
                    </td>
                    <td class="segundo-semestre">
                        2º Semestre
                    </td>
                </tr>
                <tr>
                    <td class="primeiro-semestre">
                        <input type="file" />
                    </td>
                    <td class="segundo-semestre">
                        <input type="file" />
                    </td>
                </tr>
            </table>

            <h3 id="horario-titulo"> 2º Ano </h3>

            <table id="table-horarios" width="1000px">
                <tr>
                    <td class="primeiro-semestre">
                        1º Semestre
                    </td>
                    <td class="segundo-semestre">
                        2º Semestre
                    </td>
                </tr>
                <tr>
                    <td class="primeiro-semestre">
                        <input type="file" />
                    </td>
                    <td class="segundo-semestre">
                        <input type="file" />
                    </td>
                </tr>
            </table>
        </div>

        <div class="fromDiv">

            <form class="formBox">
                <div class="leftText">Em caso de duvidas não exite em perduntar aqui!</div>
                <!-- Enviar para o email -->
                <table class="formTable">
                    <tr>
                        <td><input class="formImput" type="email" placeholder="Email" /></td>
                    </tr>
                    <tr>
                        <td><input class="formImput" type="text" placeholder="Assunto" /></td>
                    </tr>
                    <tr>
                        <td><textarea class="formImputText" placeholder="Comentário"></textarea></td>
                    </tr>
                    <tr>
                        <td><input class="formImputSubmit" type="submit"></td>
                    </tr>
                </table>
            </form>

        </div>


        <footer>
            <div id="formatacao-footer">
                <div id="esquerda">
                    <img src="./Imagens/movel.png" id="img-footer" width="50px" height="50px" />
                    <div id="strong-margin-left"> 232 480 533 </div> <br>
                    <img src="./Imagens/mail.png" id="img-footer" width="50px" height="50px" />
                    <div id="strong-margin-left"> sec-di@estgv.ipv.pt </div> <br>
                    <img src="./Imagens/localizacao.png" id="img-footer" width="50px" height="50px" />
                    <div id="strong-margin-left"> Av. Cor. José Maria Vale de Andrade, 3504-510 Viseu </div> <br>
                </div>

                <div id="meio">
                    <h1> INSTITUTO POLITÉCNICO DE VISEU </h1>
                </div>
                <div id="direita">
                    <img src="./Imagens/facebook.png" id="img-footer-right" width="50px" height="50px" />
                    <div id="strong-margin-right"> Facebook </div> <br>
                    <img src="./Imagens/twitter.png" id="img-footer-right" width="50px" height="50px" />
                    <div id="strong-margin-right"> Twitter </div> <br>
                    <img src="./Imagens/linkedin.png" id="img-footer-right" width="50px" height="50px" />
                    <div id="strong-margin-right"> Lnkedin </div> <br>
                </div>
            </div>

        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</body>


</html>