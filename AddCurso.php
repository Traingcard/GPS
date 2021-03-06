<!DOCTYPE html>
<html lang="pt">


    <head>
        <title>
            Variavel 
        </title>
    </head>
    <meta charset="UTF-8">

    <style>
        body{      
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
        }     

        .header{
            background-color: white;
            width: 100%;
            height: 100px;
        }

        #img-header{
            width: 190px;
            margin: 7.5px;
            float: left;
        }

        #header-login{
            margin-top: 12.5px;
            margin-right: 20px;
            font-size: 4em;
            float: right;
            text-decoration: none;
        }

        .pag{
            background-color: white;
            width: 100%;
            height: auto;
        }
        .cursoBanner{
            width: 96%;
            height: 450px;
            padding: 2%;
            background-color: rgba(128, 128, 128, 0.603);
        }
        .logo{
            background-color: red;
            width: 450px;
            height: 450px;
            border-radius: 100%;
            margin-left: 150px;
            float: left;
            margin-right: 200px;
        }   

        #input-img{
            margin-top: 200px;
            margin-left: 50px;
        }

        .banner{
            width: 800px;
            margin-top: 160px;
            overflow: hidden;
        }

        #banner-titulo{
            font-size: 3.5em;
            float: right;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            font-weight:bolder;
        }

        #h2introducao{
            margin: 50px;
        }

        #input-normal{
            font-size:20px;
        }

        #texto-introducao{
            margin: 50px;
            letter-spacing: 1.5px;
            font-size: 1.5em;
        }

        .meiopag{
            width: 100%;
            height: 550px;
            background-image: url("Imagens/ESTGV.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position-y: -500px;
        }

        #titulo{
           text-align: center;
           font-size: 100px;
        }


        .ingresso{
            width: 100%;
            height: auto;
            color: white;
            overflow: hidden
        }

        #texto-ingresso{
            background-color: rgba(128, 128, 128, 0.603);
            margin: 100px;
            padding: 100px;
            letter-spacing: 1.5px;
            font-size: 1.5em;
            border-radius: 25px;
        }

        #h2-ingresso{
            text-align: center;
            margin-top: 0pxx;
        }

        .horarios{
            margin-top: -100px;
        }

        
        #table-horarios{
            background-color: grey;
            width: 1500px;
            text-align: center;
            margin-left: 200px;

        }

        tr{
            border-color: black;
            
        }

        .primeiro-semestre{
            padding: 15px;
            border-color: black;
            border-bottom: 1px solid black;
            border-right: 1px solid black;
            vertical-align: center;
        }

        .segundo-semestre{
            padding: 15px;
            border-color: black;
            border-bottom: 1px solid black;
            border-left: 1px solid black;
            vertical-align: center;
        }


        #horario-titulo{
            margin-top: 100px;
            text-align: center;
            margin-bottom: 30px;
        }

        #texto-contactar{
            width: 33%;
            font-size: 50px;
            margin-left: 12.5%;
            overflow: hidden;
            float: left;
        }

        .fromDiv{
            width: 100%;
            height: auto;
            color: white;
            overflow: hidden
        }
        .formBox{
            background-color: rgba(128, 128, 128, 0.603);
            margin: 100px;
            padding-top: 50px;
            padding-bottom: 50px;
            letter-spacing: 1.5px;
            font-size: 1.5em;
            border-radius: 25px;
            display:flex;
            height: auto;
        }
        .leftText{
            height: 100%;
            width: 50%;
            padding-left: 50px;
            padding-top: 190px;
            font-size: larger;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
        }
        .formTable{
            height: 100%;
            width: auto;
            flex-grow: 1;
            padding-left: 65px;
        }

        .formImput{
            margin-top: 20px;
            width: 500px;
            height: 50px;
            border-radius: 20px;
            text-align: center;
            font-size: 30px;
            background-color: white;
            border: none;
            color:black;
        }

        .formImputText{
            margin-top: 20px;
            width: 500px;
            height: 100px;
            border-radius: 20px;
            text-align: center;
            font-size: 30px;
            background-color: white;
            border: none;
            color:black;
            padding-top: 50px;
        }

        .formImputSubmit{
            margin-top: 30px;
            width: 300px    ;
            height: 50px;
            border-radius: 20px;
            text-align: center;
            font-size: 30px;
            font-weight: bolder;
            background-color: #25a5ae;
            border: none;
            color:white;
            margin-left: 13%;
        }

        footer{
            background-color: #25a5ae;
            height: 250px;
        }

        #esquerda{
            float: left;
            text-align: left;
            width: 33%;
        }

        #meio{
            float: left;
            text-align: center;
            width: 33%;
            margin-top: 75px;
            color:white;
        }

        #direita{
            float: right;
            text-align: right;
            width: 33%;
        }

        #formatacao-footer{
            padding: 15px;
            padding-left: 40px;
            padding-right: 40px;
        }

        #img-footer{
            margin-top: 10px;
        }

        #strong-margin-left{
            font-size: 20px;
            margin-top: -33px;
            margin-left: 70px;
            font-weight: bolder;
            color: white;
        }

        #strong-margin-right{
            font-size: 20px;
            margin-top: -35px;
            font-weight: bolder;
            color: white;
        }

        #img-footer-right{
            margin-right: 110px;
            margin-top: 10px;
        }
        
    </style>


    <body>
    <form action="adicionar_curso.php" method="POST" enctype="multipart/form-data">
        <div class="header">
            <img src="Imagens/di.png" id="img-header"/>
            <a href="logout.php" id="header-login"> Logout </a>
        </div>

        <div class="pag">

                <div class="cursoBanner">

        <!-- Adicionar imagem de curso -->
             <div class="logo">
                   <input id="input-img" type="file" name="file"/>
                </div> 
        
        
                <div class="banner">

        <!-- Adicionar nome do curso -->
                    <div id="banner-titulo">

                        <textarea id="titulo" name="titulo" cols="14" rows="2"></textarea>
    
                    </div>
                </div>
               
            </div>

            <div class="introducao">
 
                    <h2 id="h2introducao">Introdu????o</h2>
        <!-- Adicionar introdu????o de curso -->
                    <div id="texto-introducao"> <p></p> <textarea id="input-normal" name="introducao" cols="162" rows="20"></textarea></div>
            </div>
            <div class="meiopag">

            </div>

            <div class="ingresso">

                <div id="texto-ingresso">
                    <h2 id="h2-ingresso"> Ingresso </h2>

          <!-- Adicionar ingresso do curso -->  

               <textarea id="input-normal" name="ingresso" cols="135" rows="20"> </textarea>
                
            </div>           
            </div>

        <div class="form">

        </div>
        

          <!-- Adicionar hor??rio do curso (upload de ficheiro) -->

        <div class="horarios">
            <h2 id="horario-titulo"> Hor??rios </h2>

            <h3 id="horario-titulo"> 1?? Ano </h3>

            <table id="table-horarios" width="1000px">
                <tr>
                    <td class="primeiro-semestre">
                        1?? Semestre
                    </td>
                    <td class="segundo-semestre">
                        2?? Semestre
                    </td>
                </tr>
                    <tr>
                        <td class="primeiro-semestre">
                            <input type="file" name="horario1-1"/>
                        </td>
                        <td class="segundo-semestre">
                            <input type="file"  name="horario2-1"/>
                        </td>
                    </tr>
            </table>

            <h3 id="horario-titulo"> 2?? Ano </h3>

            <table id="table-horarios" width="1000px">
                <tr>
                    <td class="primeiro-semestre">
                        1?? Semestre
                    </td>
                    <td class="segundo-semestre">
                        2?? Semestre
                    </td>
                </tr>
                    <tr>
                        <td class="primeiro-semestre">
                            <input type="file" name="horario1-2"/>
                        </td>
                        <td class="segundo-semestre">
                            <input type="file" name="horario2-2"/>
                        </td>
                    </tr>
            </table>
        </div>

        <div>
            <input type="submit" class="formImputSubmit"/>
    </form> 
        <div class="fromDiv">

            <form class="formBox">
                <DIV class="leftText">Em caso de duvidas n??o exite em perduntar aqui!</DIV>
                <table class="formTable">
                    <tr>
                        <td><input class="formImput" type="email" placeholder="Email"/></td>
                    </tr>
                    <tr>
                        <td><input class="formImput" type="text" placeholder="Assunto"/></td>
                    </tr>
                    <tr>
                        <td><textarea class="formImputText" placeholder="Coment??rio"></textarea></td>
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
                    <img src="./Imagens/movel.png" id="img-footer" width="50px" height="50px"/> <div id="strong-margin-left"> 232 480 533 </div> <br>
                    <img src="./Imagens/mail.png" id="img-footer" width="50px" height="50px"/> <div id="strong-margin-left"> sec-di@estgv.ipv.pt  </div> <br>
                    <img src="./Imagens/localizacao.png" id="img-footer" width="50px" height="50px"/> <div id="strong-margin-left"> Av. Cor. Jos?? Maria Vale de Andrade, 3504-510 Viseu </div> <br>
                </div>
                    
                <div id="meio">
                    <h1> INSTITUTO POLIT??CNICO DE VISEU </h1>   
                </div>
                <div id="direita">
                    <img src="./Imagens/facebook.png" id="img-footer-right" width="50px" height="50px"/> <div id="strong-margin-right"> Facebook </div> <br>
                    <img src="./Imagens/twitter.png" id="img-footer-right" width="50px" height="50px"/> <div id="strong-margin-right"> Twitter </div> <br>
                    <img src="./Imagens/linkedin.png" id="img-footer-right" width="50px" height="50px"/> <div id="strong-margin-right"> Lnkedin </div> <br>
                </div>
            </div>
            
        </footer>

    </body>


</html>