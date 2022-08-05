<?php
    include_once("../conexao.php");

    session_start();

    // Se o usuário não está logado, manda para página de login.
    if (!isset($_SESSION['user'])){
    header("Location: loginAdministrador.html");
    exit;
    }

    $num_chave = $_GET['num_chave'];
    
    $delete = "delete from chave where num_chave='$num_chave'";
    $resultado = $conexao -> query($delete);

    /*while($user_data = mysqli_fetch_assoc($resultado)){
        if($user_data['id_professor']==$matricula){
            header("Location: erroDelete.html");
            die();
        }
    }*/

    if($resultado == true){
        header("Location: listaChaves.php");
        die();
    }
    
    $conexao -> close();


?>