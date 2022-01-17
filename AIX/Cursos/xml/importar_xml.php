<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Importar XML</title>
</head>
<style>
    *{
        box-sizing: border-box;
    }
    body{
        background-color: #1a105e;
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
        align-items: center;
    }
    section{
        background-color: #295e87;
        height: 50vh;
        transform: translateY(220px);
        border-radius: 30px;
        padding: 30px;

    }
</style>
<body>
    <section>


        <?php
            // if(isset($_POST['enviar-xml'])) {
            //     $formatosPermitidos = array("xml","XML");
            //     $extensao = pathinfo($_FILES['xml-input']['name'], PATHINFO_EXTENSION);
            //     if(in_array($extensao,$formatosPermitidos)){
            //         $pasta = "xmls_importados\\";
            //         $temporario = $_FILES['xml-input']['tmp_name'];
            //         $novoNome = uniqid().".$extensao";
            //         if(move_uploaded_file($temporario, $pasta.$novoNome)) {
            //             $mensagem = "Upload feito com sucesso";
            //         } else {
            //             $mensagem = "Erro, não foi possível fazer o upload";
            //         }
            //     } else {
            //         $mensagem = "Formato Inválido";
            //     }
            // }


            // echo $mensagem;


        //$_FILES['xml-input']['tmp_name']

            require_once "../../lib/connectdb.php";

            if(isset($_POST['enviar-xml'])) {
                $xml = simplexml_load_file($_FILES['xml-input']['tmp_name']);

                $i = 0;
                while($xml->curso[$i]){

                    $i++;

                }

                

                for($x = 0; $x < $i; $x++){

                    
                    $nome = $xml->curso[$x]->nome;
                    $cod = $xml->curso[$x]->codigo;

                    $insert = "INSERT INTO `cursos`( `cod_curso`, `nome_curso`) VALUES ('$cod','$nome')";
                    if($execute = $link->query($insert)){

                        print"<h1 style='color: white'>Curso $nome</h1>";
                    }else{
                        print"<h1 style='color: white'>Erro ao adicionar $nome banco</h1>";
                    }
                    
                    
                }

                print"<h1 style='color: #39f739'>Adicionados ao banco</h1>";

                
                
                
            }
        ?>

    <div>
        <a href="../../home.php" style="margin-left: 499px; border: 3px solid transparent; padding: 8px 20px; border-radius: 5px; background-color: #ab2746;">
              <font class="form-check-label" style="color:white;">Voltar</font>
        </a>
    </div>
    </section>
</body>
</html>