<?php
    include_once("../conexao.php");

    session_start();

    // Se o usuário não está logado, manda para página de login.
    if (!isset($_SESSION['user'])){
    header("Location: loginAdministrador.html");
    exit;
    }

    $matricula = $_GET['matricula'];
    
    $reserva = "select * from reserva";
    $resultado = $conexao -> query($reserva);

    while($user_data = mysqli_fetch_assoc($resultado)){
        if($user_data['id_professor']==$matricula){
            header("Location: erroDelete.html");
            die();
        }
    }

    $sql = "delete from funcionario where matricula='$matricula'";

    $resultado2 = $conexao -> query($sql);

    if($resultado == true){
        header("Location: listaFuncionarios.php");
        die();
    }
    
    $conexao -> close();


?>