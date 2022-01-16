<?php

require_once "../lib/connectdb.php";

$id = $_POST['id'];
$query_update = "UPDATE `alunos` SET ativo='n' WHERE id = $id";

if($result = $link->query($query_update)){

    print"<h1 style='color: white;'>Deletado</h1>";

}


