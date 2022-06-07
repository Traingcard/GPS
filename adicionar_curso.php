<?php   
    include "./BD/bd.php";
    
    $nome = $_POST['titulo'];
    $introducao = $_POST['introducao'];
    $ingresso = $_POST['ingresso'];

        if($_FILES["file"]["error"] > 0)
        {
            echo "ERROR: " . $_FILES["file"]["error"] . "<br>";
            exit;
        }
            else
                {
                    if(file_exists("./Imagens/" .$_FILES["file"]["name"]))
                        {
                            echo "<script> window.alert('A imagem inserida já existe! '); </script>"; 
                            exit;
                        }
                        else
                        {
                            move_uploaded_file($_FILES["file"]["tmp_name"], "./Imagens/" .
                            $_FILES["file"]["name"]);

                            move_uploaded_file($_FILES["horario1-1"]["tmp_name"], "./Horarios/" .
                            $_FILES["horario1-1"]["name"]);

                            move_uploaded_file($_FILES["horario1-2"]["tmp_name"], "./Horarios/" .
                            $_FILES["horario1-2"]["name"]);

                            move_uploaded_file($_FILES["horario2-1"]["tmp_name"], "./Horarios/" .
                            $_FILES["horario2-1"]["name"]);

                            move_uploaded_file($_FILES["horario2-2"]["tmp_name"], "./Horarios/" .
                            $_FILES["horario2-2"]["name"]);

                            $filename="./Imagens/" .$_FILES["file"]["name"];
                            $horario1="./Horarios/" .$_FILES["horario1-1"]["name"];
                            $horario2="./Horarios/" .$_FILES["horario1-2"]["name"];
                            $horario3="./Horarios/" .$_FILES["horario2-1"]["name"];
                            $horario4="./Horarios/" .$_FILES["horario2-2"]["name"];

                            $insert = "INSERT INTO curso VALUES ('', '$nome','$introducao','$ingresso','$filename')";
                            $result = mysqli_query($conexao, $insert) or die("ERRO AO INTRODUZIR");

                            $id = mysqli_fetch_array(mysqli_query($conexao,"SELECT MAX(id_curso) AS id_curso FROM curso"))['id_curso'];
                            
                            $inserthorario = "INSERT INTO horario VALUES('','$horario1','$horario2','$horario3','$horario4', $id)";
                            $query = mysqli_query($conexao, $inserthorario) or die("ERRO AO INSERIR");
                        }
                }

        

?>