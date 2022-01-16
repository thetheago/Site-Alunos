<?php

    require_once "../lib/connectdb.php";

    $cod_digitado = $_POST['cod_digitado'];
    $nome_digitado = $_POST['nome_digitado'];
    $nome_validacao = $_POST['nome_validacao'];
    

    $query = "UPDATE `cursos` SET `cod_curso`='$cod_digitado',`nome_curso`='$nome_digitado' WHERE nome_curso = '$nome_validacao'";

    if($sql = $link->query($query)){
        print"<h1 style='color: white;'>Curso Atualizado</h1>";
    }else{
        print"<h1 style='color: white;'>Erro ao atualizar curso</h1>";
    }













?>