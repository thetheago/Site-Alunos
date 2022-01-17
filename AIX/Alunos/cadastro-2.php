<?php

    

      function get_endereco($cep){


        // $cepFormatado = str_replace("/[^0-9]", "", $cep);
        $url = "http://serviceweb.aix.com.br/aixapi/api/cep/$cep";
        $resultado = json_decode(file_get_contents($url));
 

        return $resultado;
      }

        if(isset($_POST['botaoCadastro'])){

          $codAluno = substr(uniqid(rand()), 0, 5);
          $nome = $_POST['nome'];
          $login = $_POST['login'];
          $senhaCadastro = $_POST['senha'];
          $cep = $_POST['cep'];
          $email = $_POST['email'];
          $numero = $_POST['numero'];
          $complemento = $_POST['complemento'];
          $dataCadastro = date('Y/m/d');
          $curso = $_POST['curso'];
          $turma = $_POST['turma'];

          if(!empty($nome) && !empty($login) && !empty($senhaCadastro) 
            && !empty($cep) && !empty($email) && !empty($numero) && !empty($dataCadastro) 
            && !empty($curso) && !empty($turma))
          {

              $api = get_endereco($cep);
                $bairro = $api->bairro;
                $rua = $api->logradouro;
                $cidade = $api->cidade;
                $estado = $api->estado;


            require_once "../lib/connectdb.php";

            $query = "INSERT INTO `alunos`(`nome`, cod_aluno, `login`, `senha`, `email`, ativo, cep, cidade, estado, bairro, rua, numero, complemento, curso, turma, data_cadastro) 
              VALUES ('$nome', '$codAluno', '$login','$senhaCadastro','$email','s','$cep', '$cidade', '$estado', '$bairro','$rua', '$numero', '$complemento', '$curso', '$turma', '$dataCadastro')";
            
            if($insert = $link->query($query)){



              ?>
                <h1 style='color: white;'>Usuário Cadastrado</h1>
                <a href="../index.php" style="margin-left: 499px; border: 3px solid transparent; padding: 8px 20px; border-radius: 5px; background-color: #ab2746;">
                  <font class="form-check-label" style="color:white;">Voltar</font>
                </a>
            
              <?php

            }else{

              ?>
                <h1 style='color: white;'>Erro ao cadastrar</h1>
          
              <?php

            }
            
          }else{

            echo"nome : $nome <br>";
            echo"codAluno : $codAluno <br>";
            echo"login : $login <br>";
            echo"senhaCadastro : $senhaCadastro <br>";
            echo"email : $email <br>";
            echo"cep : $cep <br>";
            echo"numero : $numero <br>";
            echo"complemento : $complemento <br>";
            echo"curso : $curso <br>";
            echo"turma : $turma <br>";
            echo"dataCadastro : $dataCadastro <br>";

            ?>
              <h1 style='color: white;'>Certifique-se de preencher todos os campos</h1>
              <a href="../index.php" style="margin-left: 499px; border: 3px solid transparent; padding: 8px 20px; border-radius: 5px; background-color: #ab2746;">
                  <font class="form-check-label" style="color:white;">Voltar</font>
              </a>
      
            <?php


          }
          

        }

    ?>