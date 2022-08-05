<?php
include_once("../conexao.php");

$matricula = isset($_POST['matricula']) ? $_POST['matricula'] : "";
$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
$senha = isset($_POST['senha']) ? $_POST['senha'] : "";

$checa_matricula = "select * from funcionario";
$resultado_checa = $conexao -> query($checa_matricula);

while($user_data = mysqli_fetch_assoc($resultado_checa)){
    if($matricula == $user_data['matricula']){
        header("Location: erroFuncionario.html");
        die();
    }
}

$sql = "insert into funcionario values ('$matricula', '$nome', '$senha')";
$resultado = $conexao -> query($sql);

if($resultado==true){
    header("Location: sucessoFuncionario.html");
    die();
}

$conexao -> close();

?>