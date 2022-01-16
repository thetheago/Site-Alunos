
<?php

    require_once "../lib/connectdb.php";

    $id = $_POST['id'];
    $selectCursos = "SELECT nome_curso FROM cursos ORDER BY nome_curso";
    $result = $link->query($selectCursos);
    
    
    
?>
<form action="">
    <h1 style="color: white;">Digite as novas informações:</h1>
    <h3 style="color: white;">Foto:</h3>
    <input type="file" name="new_foto" id="new_foto" class="form-control" aria-describedby="emailHelp" style="margin-bottom: 15px;">
    <h3 style="color: white;">Codigo do aluno:</h3>
    <input type="number" name="new_code" id="new_code" class="form-control" aria-describedby="emailHelp" style="margin-bottom: 15px;">
    <h3 style="color: white;">Nome:</h3>
    <input type="text" name="new_name" id="new_name" class="form-control" aria-describedby="emailHelp" required style="margin-bottom: 15px;">
    <h3 style="color: white;">Login: </h3>
    <input type="text" name="new_login" id="new_login" class="form-control" aria-describedby="emailHelp" required style="margin-bottom: 15px;">
    <h3 style="color: white;">Senha:</h3>
    <input type="password" name="new_password" id="new_password" class="form-control" aria-describedby="emailHelp" required style="margin-bottom: 15px;">
    <h3 style="color: white;">Email:</h3>
    <input type="mail" name="new_mail" id="new_mail" class="form-control" aria-describedby="emailHelp" required style="margin-bottom: 15px;">
    <h3 style="color: white;">Curso:</h3>
    <select name="new_curso" id="new_curso" class="form-control" aria-describedby="emailHelp" required style="margin-bottom: 15px;">
    <?php
        
        // var_dump($_FILES);
        // if(){

        //     $extensao = strtolower(substr($_FILES['arquivo']['new_foto'], -4));
        //     $novo_nome = md5(time()). $extensao;
        //     $diretorio = "fotos/";

        //     move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo);

        // }
        
        while($j = $result->fetch_assoc()){

            $nomeCurso = $j['nome_curso'];

            print"<option value='$nomeCurso'>$nomeCurso</option>";
        }
        
    ?>
    </select>
    <h3 style="color: white;">Turma:</h3>
    <input type="text" name="new_turma" id="new_turma" class="form-control" aria-describedby="emailHelp" required style="margin-bottom: 15px;">
    <input type="hidden" id="idinputhid" value="<?=$id?>">
</form>
<button class="btn btn-info" onclick="atualizarAluno()">Confirmar</button>


