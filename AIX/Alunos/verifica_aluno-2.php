

<?php


    if(!empty($id_digitado)){
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
                <h1 style="color: white;">Nome : <?=$nome_aluno?></h1>
                <input type="hidden" id="id_digitado_input" value="<?=$id_digitado?>">
                <h3>Exluir este aluno?</h3>
                <a href="javascript::" onclick="load_pageToDelete('deletar_aluno.php')">Sim</a>
                <a href="../home.php">Não</a> 
            <?php
            }?>
            
        
        </div>
        <?php


    }else{
        ?>
            <h1 style='color: white'>Digite o código do curso</h1>
            <a href="excluir_alunos.php" style="margin-left: 499px; border: 3px solid transparent; padding: 8px 20px; border-radius: 5px; background-color: #ab2746;">
                  <font class="form-check-label" style="color:white;">Voltar</font>
            </a>
        <?php    
    }   
    ?>