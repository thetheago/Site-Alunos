
<?php
    $nome_curso = $_POST['nome_curso'];
?>

<h3 style="color: white;">Codigo do curso:</h3>
<input type="text" name="nome" id="cod" class="form-control" aria-describedby="emailHelp" required style="margin-bottom: 15px;">
<h3 style="color: white;">Nome do curso:</h3>
<input type="text" name="nome" id="nome" class="form-control" aria-describedby="emailHelp" required style="margin-bottom: 15px;">
<input type="hidden" id="nomecurso" value="<?=$nome_curso?>">
<button class="btn btn-info" onclick="atualizarCurso()">Confirmar</button>


<script src="cursoFunctions.js"></script>