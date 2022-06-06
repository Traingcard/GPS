<?php
    include "./BD/bd.php";
?>

<!DOCTYPE html>
<html lang="pt">
    <head> 
        <title> 
            Departamento de Informática
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    </head>

    <link rel="stylesheet" href="./script/css.css">

    <script src="./script/flickity.pkgd.min.js"></script>


    <style>
        *{
            margin: auto;
            padding: auto;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 20px;
        }    
        header{
            background-color: white;
            width: 100%;
            height: 90px;
            display: flex;
        }
        .divLogo{
            height: 100%;
            flex: 1;
        }
        .divNome{
            height: 100%;
            flex: 1;
            padding-top: 35px;
            padding-left: 220px;
            color: black;
        }
        .divLogin{
            height: 100%;
            width: 33%;
            flex: 1;
            display: flex;
        }
        .headerImg{
            margin-top: 5px;
            margin-left: 390px;
            width: auto;
            height: 60px;
        }
        #img-header{
            width: 150px;
            height: 70px;
            margin: 13px;
        }
        body{
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
        #menu{
            width: 100%;
            height: auto;
            margin: 0;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }
        footer{
            background-color: #25a5ae;
            color: white;
            height: 90px;
            width: 100%;
            position: fixed;
            bottom: 0px;
            display: flex;
        }
        .divTelemovel{
            height: 100%;
            width: 33%;
            display: flex;
        }
        .divEmail{
            height: 100%;
            width: 33%;
            flex: 1;
            display: flex;
        }
        .divLocal{
            height: 100%;
            width: 33%;
            flex: 1;
            display: flex;
        }
        .footerImg{
            margin-top: 20px;
            margin-left: 190px;
            width: auto;
            height: 50px;
        }
        .FooterTexto{
            padding-left: 20px;
            width: 10px;
            flex: 1;
        }
        
    </style>


    <body>
        <header>
            <div class="divLogo">
                <img src="Imagens/di.png" alt="Departamento de Informática" id="img-header">
            </div>
            <div class="divNome">
                <imput>INSTITUTO POLITÉCNICO DE VISEU</imput>
            </div>
            <div class="divLogin">
                <a href="../GPS/login.html"><img class="headerImg" src="Imagens/user.png" alt="Departamento de Informática" ></a>
            </div>         
        </header>
    

        <div class="gallery js-flickity"
            data-flickity-options='{ "wrapAround": true }'>
            
            <?php
                    $select="select * from curso";
                    $result=mysqli_query($ligax,$select);
                    $nregistos=mysqli_num_rows($result);

                    for ($i=0; $i<$nregistos; $i++)
                    {
                        $registo=mysqli_fetch_assoc($result);
                        $id_curso=$registo['id_curso'];
                        $nome=$registo['nome'];
                        $imagem=$registo['imagem'];

                        echo "<div class='gallery-cell'><a href='./About.php?id_curso=$id_curso'><img id='menu' src='$imagem'/></a></div>";
                    }

                    //TODO: VER SE ESTÁ LOGADO, SE ESTIVER APARECER A SEGUINTE DIV COM HIPERLIGAÇÃO PARA O ADDCURSO PARA ADICIONAR CURSOS
                    //<div class='gallery-cell'><a href='./AddCurso.html'><img id='menu' src='./Imagens/Adicionar.png'/></a></div>
            ?>
  
        </div>

        

        <footer>
            <div class="divTelemovel">
                <img  class="footerImg" src="../GPS/Imagens/movel.png">
                <imput class="FooterTexto">+351 232 480 533</imput>
            </div>
            <div class="divEmail">
                <img  class="footerImg" src="../GPS/Imagens/mail.png">
                <imput class="FooterTexto">sec-di@estgv.ipv.pt</imput>
            </div>
            <div class="divLocal">
                <img  class="footerImg" src="../GPS/Imagens/localizacao.png">
                
                <imput class="FooterTexto">Av. Cidade Politécnica, Viseu</imput>
            </div>
        </footer> 

    </body>

</html>
