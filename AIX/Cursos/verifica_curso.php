<style>
  *{
    color: white;
  }

</style>



<?php

  

    $codCursoPesquisa = $_POST['codCursoPesquisa'];

    if(!empty($codCursoPesquisa)){

    


      require_once "../lib/connectdb.php";
      $sql = "SELECT nome_curso FROM cursos WHERE cod_curso = '$codCursoPesquisa' limit 1";
      $result = $link->query($sql);


      
      if($array = $result->fetch_array()){

        $nome_curso = $array['nome_curso'];


        ?>

          <section>
            <h1>Curso : <?=$nome_curso?></h1>
            <input type="hidden" id="nomecurso" value="<?=$nome_curso?>">
            <h3>Editar informações desse curso?</h3>
            <a href="javascript::" onclick="load_page('editar_curso-2.php')">Sim</a>
            <a href="editar_curso.php">Não</a> 
          </section>

        <?php
      }else{
        ?>
          <div style="display: flex;flex-direction: row;align-items: center;">
            <h1 style='color: white;'>Código Inválido</h1>
            <a href="editar_curso.php" style="margin-left: 499px; border: 3px solid transparent; padding: 8px 20px; border-radius: 5px; background-color: #ab2746;">
                <font class="form-check-label" style="color:white;">Voltar</font>
            </a>
          </div>

        <?php
      }
    }else{
      ?>
        <h1 style='color: white;'>Digite o codigo do curso</h1>
        <a href="editar_curso.php" style="margin-left: 499px; border: 3px solid transparent; padding: 8px 20px; border-radius: 5px; background-color: #ab2746;">
            <font class="form-check-label" style="color:white;">Voltar</font>
        </a>

      <?php
    }
?>