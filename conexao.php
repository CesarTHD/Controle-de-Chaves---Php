<?php
    $hostname = 'localhost';
    $bd = 'controlechaves';
    $user = 'root';
    $pass = 'A36mn453bc4a';

    $conexao = new MySQLi ($hostname, $user, $pass, $bd);
    
    if($conexao -> connect_errno){
        echo "Falha ao conectar";
    }
?>