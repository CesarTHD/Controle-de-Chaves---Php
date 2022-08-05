<?php
    include_once("../conexao.php");

    session_start();

    // Se o usuário não está logado, manda para página de login.
    if (!isset($_SESSION['user'])){
    header("Location: loginServidor.html");
    exit;
    }

    $num_chave = $_GET['num_chave'];
    $turno = $_GET['turno'];
    
    $sql = "delete from reserva where num_chave='$num_chave' and turno='$turno'";

    $resultado = $conexao -> query($sql);

    if($resultado == true){
        header("Location: devolveChave.php");
        die();
    }else{
        header("Location: devolveChave.php");
        die();
    }
    
    $conexao -> close();


?>