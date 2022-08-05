<?php
    include_once("../conexao.php");

    session_start();

    // Se o usuário não está logado, manda para página de login.
    if (!isset($_SESSION['user'])){
    header("Location: loginAdministrador.html");
    exit;
    }

    $matricula = $_POST['matricula'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    
    $update = "update funcionario set nome='$nome', senha='$senha' where matricula='$matricula'";
    $resultado = $conexao -> query($update);

    /*while($user_data = mysqli_fetch_assoc($resultado)){
        if($user_data['id_professor']==$matricula){
            header("Location: erroDelete.html");
            die();
        }
    }*/

    if($resultado == true){
        header("Location: listaFuncionarios.php");
        die();
    }
    
    $conexao -> close();


?>