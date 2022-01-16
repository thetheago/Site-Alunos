<style>
  *{
    color: white;
  }

</style>



<?php

  require_once "../lib/connectdb.php";

    $codCursoPesquisa = $_POST['codCursoPesquisa'];
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
    }

?>