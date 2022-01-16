<?php
    
    require_once "../lib/connectdb.php";



    $new_code       = $_POST['new_code'];
    $new_name       = $_POST['new_name'];
    $new_login      = $_POST['new_login'];
    $new_password   = $_POST['new_password'];
    $new_mail       = $_POST['new_mail'];
    $new_curso      = $_POST['new_curso'];
    $new_turma      = $_POST['new_turma'];
    // $ativo          = $_POST['ativo'];
    $id             = $_POST['id'];


    //Query para setar ativo = n e adicionar uma nova linha com as novas informações

    $query_update = "UPDATE `alunos` SET cod_aluno='$new_code', `nome`='$new_name',`login`='$new_login',`senha`='$new_password',`email`='$new_mail', curso='$new_curso', turma='$new_turma'
      WHERE id = $id";

    if(($link->query($query_update) === TRUE)){

        print"<h1 style='color:white;'>Atualizado</h1>";
    }else{
        print"<h1 style='color:white;'>Erro</h1>";
    }
        
?>

