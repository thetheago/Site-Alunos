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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="editar_alunos_fixx.js"></script>
  
</head>

<body>


  <section class="sec-login" style="transform: translateY(260px); display:flex; flex-direction: column; align-items: center;">
    <div class="admin-content analysis-progrebar-ctn res-mg-t-15" id="div-cadastro-curso" style="width: 744px; height: 500px;">
      <section style="text-align: center; color:white;">
        <h1 style="color: red;">EXCLUIR ALUNO</h1>
      </section>
      <div id="div-ajax">
        <div class="mb-3" style="padding-bottom: 30px;">
          <label for="exampleInputEmail1" class="form-label" style="color:white;">Digite o código do curso que deseja excluir:</label>
          <input type="text" name="id_digitado" id="id_digitado" class="form-control" aria-describedby="emailHelp" required>
        </div>
        <div class="div-cursos" style="overflow: hidden; background-color: transparent;">
          <button type="button" id="botao" class="btn btn-primary" onclick="validacaoAlunoToDelete()">Confirmar</button>
        </div>
      </div>
    </div>
    
  </section>



  </div>  



  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  
  <!-- jquery
		============================================ -->
  <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <!-- bootstrap JS
		============================================ -->
  <script src="js/bootstrap.min.js"></script>
  <!-- wow JS
		============================================ -->
  <script src="js/wow.min.js"></script>
  <!-- price-slider JS
		============================================ -->
  <script src="js/jquery-price-slider.js"></script>
  <!-- meanmenu JS
		============================================ -->
  <script src="js/jquery.meanmenu.js"></script>
  <!-- owl.carousel JS
		============================================ -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- sticky JS
		============================================ -->
  <script src="js/jquery.sticky.js"></script>
  <!-- scrollUp JS
		============================================ -->
  <script src="js/jquery.scrollUp.min.js"></script>
  <!-- mCustomScrollbar JS
		============================================ -->
  <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
  <!-- metisMenu JS
		============================================ -->
  <script src="js/metisMenu/metisMenu.min.js"></script>
  <script src="js/metisMenu/metisMenu-active.js"></script>
  <!-- sparkline JS
		============================================ -->
  <script src="js/sparkline/jquery.sparkline.min.js"></script>
  <script src="js/sparkline/jquery.charts-sparkline.js"></script>
  <!-- calendar JS
		============================================ -->
  <script src="js/calendar/moment.min.js"></script>
  <script src="js/calendar/fullcalendar.min.js"></script>
  <script src="js/calendar/fullcalendar-active.js"></script>
  <!-- float JS
		============================================ -->
  <script src="js/flot/jquery.flot.js"></script>
  <script src="js/flot/jquery.flot.resize.js"></script>
  <script src="js/flot/curvedLines.js"></script>
  <script src="js/flot/flot-active.js"></script>
  <!-- plugins JS
		============================================ -->
  <script src="js/plugins.js"></script>
  <!-- main JS
		============================================ -->
  <script src="js/main.js"></script>
</body>

</html>