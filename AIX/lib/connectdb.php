<?php
    
    $hostname = "localhost";
    $banco    = "aixdb";
    $usuario  = "root";
    $senha    = "";

    $link = new mysqli($hostname, $usuario, $senha, $banco);
    if ($link->connect_errno) {
        echo "Falha ao conectar: (" . $link->connect_errno . ") " . $link->connect_error;
    }
    
?>