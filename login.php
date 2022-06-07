<!DOCTYPE html>
<html lang="pt">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <link rel="stylesheet" href="./script/css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">

    <title>
        Login
    </title>
    <script src="./script/utils.js" ></script>
    <script src="./script/middleware.js" ></script>
</head>

<style>
    * {
        margin: 0%;
        padding: 0%;
    }

    body {
        overflow: hidden;
    }

    .left {
        background-color: white;
        background-image: url('./Imagens/Login.png');
        background-position-y: center;
        background-repeat: no-repeat;
        background-size: 100%;
        width: 50%;
        height: 970px;
        float: left;
    }

    .right {
        background-color: #25a5ae;
        width: 50%;
        height: 10000px;
        float: right;
    }

    .form {
        background-color: white;
        width: 55%;
        height: 550px;
        float: right;
        border-radius: 6%;
        margin-top: 25%;
        margin-right: 20%;
    }

    #title {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        text-align: center;
        font-size: 3em;
        margin-top: 10%;
    }

    .input-login {
        margin-top: 50px;
        margin-left: 15%;
        width: 70%;
        height: 70px;
        border-radius: 20px;
        text-align: center;
        font-size: 30px;
        background-color: #187c83;
        border: none;
        color: #25a5ae;
    }

    .input-login::placeholder {
        color: #000;
        opacity: 0.5;
        font-style: italic;
    }

    .button-login {
        margin-top: 50px;
        margin-left: 38%;
        margin-right: 45%;
        width: 25%;
        height: 50px;
        border-radius: 15px;
        background-color: #10475D;
        color: white;
        font-size: 30px;
        font-weight: bolder;
        border: 0px;
        cursor: pointer;
    }

    #di_login {
        width: 200px;
        margin: 100px;
    }

    #texto_login {
        margin-top: 570px;
        margin-left: 190px;
        color: #10475D;
        font-family: "Eras ITC", "Eras BOld ITC", sans-serif;
        font-size: 40px;
    }

    .error-input {
        font-family: 'open sans', sans-serif;
        color: red;
        font-size: 18px;
        margin-left: 20%;
    }
</style>

<body onload="middleware()">

    <!-- TODO: FAZER DISTO UM VERDADEIRO LOGIN, NÃO É NECESSÁRIO TER UM REGISTAR, OS REGISTOS PODEM SER CRIADOS MESMO ATRAVES DO MYADMIN -->
    <div class="left">
        <img id="di_login" src="./Imagens/di.png" />

        <h2 id="texto_login"> Departamento de Informática </h2>
    </div>

    <div class="right">
        <div class="form">
            <h1 id="title">Login</h1>

            <form onsubmit="javascript:login(event);">
                <input id="username" class="input-login" type="text" placeholder="Username" required />
                <input id="password" class="input-login" type="password" placeholder="Password" required />

                <span id="error" class="error-input"></span>
               
                <button class="button-login" type="submit">Entrar</button>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="./script/login.js"></script>

</body>

</html>