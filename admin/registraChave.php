<?php
include_once("../conexao.php");

$identificacao = isset($_POST['identificacao']) ? $_POST['identificacao'] : "";
$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : "";

$sql = "insert into chave values ('$identificacao', '$descricao')";

$resultado = $conexao -> query($sql) or trigger_error($conexao->error);

if($resultado == true){
    header("Location: sucessoChave.html");
    die();
}else{
    echo "Falha";
}

$conexao -> close();

?>