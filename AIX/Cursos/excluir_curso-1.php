<?php

    

    $codCursoPesquisa = $_POST['codCursoPesquisa'];

    if(!empty($codCursoPesquisa)){

    

        

        require_once "../lib/connectdb.php";
        $sql = "SELECT nome_curso, id FROM cursos WHERE cod_curso = '$codCursoPesquisa' limit 1";
        $result = $link->query($sql);



        if($array = $result->fetch_array()){

        $nome_curso = $array['nome_curso'];
        $id_curso   = $array['id'];


        ?>

            <section>
                <h1>Curso : <?=$nome_curso?></h1>
                <input type="hidden" id="codcurso" value="<?=$id_curso?>">
                <h3>Deseja mesmo deletar este curso?</h3>
                <a href="javascript::" onclick="deleteCurso()">Sim</a>
                <a href="../home.php">Não</a> 
            </section>

        








        <?php
        }else{


            ?>
                <div style="display: flex;flex-direction: row;align-items: center;justify-content: space-around;">
                <h1 style='color: white;'>Código inválido</h1>
                <a href="excluir_curso.php" style="border: 3px solid transparent; padding: 8px 20px; border-radius: 5px; background-color: #ab2746;">
                    <font class="form-check-label" style="color:white;">Voltar</font>
                </a>
                </div>

            <?php

            
        }
    }else{

        ?>
            <div style="display: flex;flex-direction: row;align-items: center;justify-content: space-around;">
            <h1 style='color: white;'>Digite o código do curso</h1>
            <a href="excluir_curso.php" style="border: 3px solid transparent; padding: 8px 20px; border-radius: 5px; background-color: #ab2746;">
                <font class="form-check-label" style="color:white;">Voltar</font>
            </a>
            </div>

        <?php





    }

?>