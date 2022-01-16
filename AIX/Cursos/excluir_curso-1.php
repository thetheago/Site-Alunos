<?php

    require_once "../lib/connectdb.php";

    $codCursoPesquisa = $_POST['codCursoPesquisa'];
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
    }



    ?>