<?php

require_once "../lib/connectdb.php";

    $nomeCurso  = $_POST['nomeCurso'];
    $codCurso  = $_POST['codCurso'];

    $query = "INSERT INTO `cursos`( `cod_curso`, `nome_curso`) VALUES ('$codCurso','$nomeCurso')";
    if($sql = $link->query($query)){
        print"<h1 style='color: white;'>Curso Cadastrado</h1>";
    }else{
        print"<h1 style='color: white;'>Erro ao cadastrar curso</h1>";
    }
    
?>