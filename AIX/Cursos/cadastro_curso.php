<?php

require_once "../lib/connectdb.php";

    $nomeCurso  = $_POST['nomeCurso'];
    $codCurso  = $_POST['codCurso'];

    if(!empty($nomeCurso) && !empty($codCurso)){

        $query = "INSERT INTO `cursos`( `cod_curso`, `nome_curso`) VALUES ('$codCurso','$nomeCurso')";
        if($sql = $link->query($query)){
            print"<h1 style='color: white;'>Curso Cadastrado</h1>";
        }else{
            print"<h1 style='color: white;'>Erro ao cadastrar curso</h1>";
        }

    }else{
        ?>
            <h1 style='color: white;'>Preencha todos os campos!</h1>
            <a href="cadastro_curso.html" style="margin-left: 499px; border: 3px solid transparent; padding: 8px 20px; border-radius: 5px; background-color: #ab2746;">
                <font class="form-check-label" style="color:white;">Voltar</font>
            </a>

        <?php
        
    }
    
?>