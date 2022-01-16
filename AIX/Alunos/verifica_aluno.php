
<style>
    *{
        color: white;
    }
</style>
<?php

    require_once "../lib/connectdb.php";

    $id_digitado = $_POST['id'];
    $busca_alunos = mysqli_query($link, "SELECT * FROM alunos WHERE id = $id_digitado");
    $rows         = mysqli_num_rows($busca_alunos);
    
    if($rows != 0){
        $result = $busca_alunos->fetch_assoc();

        $id_aluno       = $result['id'];
        $nome_aluno     = $result['nome'];
        $email_aluno    = $result['email'];
        $status_aluno   = $result['ativo'];
        
        if($status_aluno != 's'){
            
            ?>
                <h1>Este id está desativado</h1>
                <h4>Vá até a listagem para ver qual id deseja alterar :-)</h4>
            <?php
                die();
        }

        elseif ($rows == 0) {
            ?>
            <h1>Não existe aluno com este id</h1>
            
            <?php
        }
    }
        
   
?>

<div>
    <?php if($rows){?>
        <h1>Nome : <?=$nome_aluno?></h1>
        <input type="hidden" id="id_digitado_input" value="<?=$id_digitado?>">
        <h3>Editar informações desse aluno?</h3>
        <a href="javascript::" onclick="load_page('editar_alunos-2.php')">Sim</a>
        <a href="editar_alunos.php">Não</a> 
    <?php
    }?>
    
  
</div>