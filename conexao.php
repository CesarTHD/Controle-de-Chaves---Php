<?php
    $hostname = 'localhost';
    $bd = 'controlechaves';
    $user = 'root';
    $pass = 'xxxx';

    $conexao = new MySQLi ($hostname, $user, $pass, $bd);
    
    if($conexao -> connect_errno){
        echo "Falha ao conectar";
    }
?>
