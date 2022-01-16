<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Teste AIX</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.css">
    <link rel="stylesheet" href="../assets/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../assets/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../assets/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="../lib/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="cadastro.js"></script>
</head>


<body>

    <?php

      require "../lib/connectdb.php";


    ?>

    <section class="sec-login" style="transform: translateY(19px); display:flex; flex-direction: column; align-items: center;">
        <div class="admin-content analysis-progrebar-ctn res-mg-t-15" id="div-login" style="width: 744px; height: 911px;">
            <section style="text-align: center; color:white;">
              <h1>CADASTRO</h1>
            </section>

            <section id="sec-ajax">
              <div class="mb-3" style="padding-bottom: 30px;">
                  <label for="exampleInputEmail1" class="form-label" style="color:white;">Nome</label>
                  <input type="text" name="nome" id="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              </div>
              <div class="mb-3" style="padding-bottom: 20px; color:white">
                  <label for="exampleInputPassword1" class="form-label">Login</label>
                  <input type="text" name="login" id="login" class="form-control" id="exampleInputPassword1" required>
              </div>
              <div class="mb-3" style="padding-bottom: 20px; color:white">
                  <label for="exampleInputPassword1" class="form-label">Senha</label>
                  <input type="password" name="senha" id="senha" class="form-control" id="exampleInputPassword1" required>
              </div>
              <div class="mb-3" style="padding-bottom: 20px; color:white">
                  <label for="exampleInputPassword1" class="form-label">Email</label>
                  <input type="text" name="email" id="email" class="form-control" required>
              </div>
              <div class="mb-3" style="padding-bottom: 20px; color:white">
                  <label for="exampleInputPassword1" class="form-label">Cep</label>
                  <input type="text" name="cep" id="cep" class="form-control" required>
              </div>
              <div class="mb-3" style="padding-bottom: 20px; color:white">
                  <label for="exampleInputPassword1" class="form-label">Número da casa</label>
                  <input type="number" name="numero" id="numero" class="form-control" required>
              </div>
              <div class="mb-3" style="padding-bottom: 20px; color:white">
                  <label for="exampleInputPassword1" class="form-label">Complemento</label>
                  <input type="text" name="complemento" id="complemento" class="form-control" required>
              </div>
              <h3 style="color: white;">Curso:</h3>
              <select name="curso" id="curso" class="form-control" aria-describedby="emailHelp" required style="margin-bottom: 15px;">
              <?php
                  
                  $selectCursos = "SELECT nome_curso FROM cursos ORDER BY nome_curso";
                  $result = $link->query($selectCursos);
               
                  while($j = $result->fetch_assoc()){

                      $nomeCurso = $j['nome_curso'];

                      print"<option value='$nomeCurso'>$nomeCurso</option>";
                  }
                  
              ?>
              </select>
              <h3 style="color: white;">Turma:</h3>
              <input type="text" name="turma" id="turma" class="form-control" aria-describedby="emailHelp" required style="margin-bottom: 15px;">
              <button type="submit" name="botao-cadastro" id="botao-cadastro" value="cadastrar" onclick="cadastrarAluno()" class="btn btn-primary">Cadastrar</button>
              <a href="../index.php" style="margin-left: 499px; border: 3px solid transparent; padding: 8px 20px; border-radius: 5px; background-color: #ab2746;">
                  <font class="form-check-label" style="color:white;">Voltar</font>
              </a>
            </section>

        </div>
    </section>
    </div>
    <!-- jquery
		============================================ -->
    <script src="../lib/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="../lib/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="../lib/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="../lib/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="../lib/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="../lib/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="../lib/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="../lib/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="../lib/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../lib/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="../lib/js/metisMenu/metisMenu.min.js"></script>
    <script src="../lib/js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="../lib/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../lib/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="../lib/js/calendar/moment.min.js"></script>
    <script src="../lib/js/calendar/fullcalendar.min.js"></script>
    <script src="../lib/js/calendar/fullcalendar-active.js"></script>
	<!-- float JS
		============================================ -->
    <script src="../lib/js/flot/jquery.flot.js"></script>
    <script src="../lib/js/flot/jquery.flot.resize.js"></script>
    <script src="../lib/js/flot/curvedLines.js"></script>
    <script src="../lib/js/flot/flot-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="../lib/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="../lib/js/main.js"></script>
</body>

</html>