<?php
include_once("../conexao.php");
$id = isset($_POST['id']) ? $_POST['id'] : "";
$senha = isset($_POST['senha']) ? $_POST['senha'] : "";
session_start();
$sql = "select * from funcionario where matricula = '$id' and senha = '$senha'";

$resultado = $conexao -> query($sql) or trigger_error($conexao->error);

if($resultado == true){
  $row = $resultado->fetch_array(MYSQLI_ASSOC);
  $_SESSION['user'] = $row['matricula']; // Marca a global para verificar se o usuário está logado.
  header('Location: indexServidor.php'); // Página do sistema
  exit; // Encerra a execução do script

  die();
}else{
    header('Location: loginAdministrador.html');
    exit;
}

$conexao -> close();

?>