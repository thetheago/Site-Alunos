<?php

    require_once "../lib/connectdb.php";

    $id = $_POST['id'];
    $sql = "DELETE FROM `cursos` WHERE id ='$id'";



    if($result = $link->query($sql)){

        print"<h1 style='color:white;'>Curso deletado</h1>";

    }
    else{



        print"<h1 style='color:white;'>Erro ao deletar curso</h1>";
    }



    ?>