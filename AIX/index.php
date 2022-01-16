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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<style>
    body{
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
</style>


<body>
    
    <?php

      require "lib/connectdb.php";
      require "redirect.php";
      $redirect = new sendPage();

    ?>

    <!-- Start Welcome area -->
    <div style="display: flex; flex-direction: column; align-items: center;">
        <div class="header-advance-area" style="display:flex; flex-direction: column; align-items: center;">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        
                    </div>
                </div>
            </div>

            <section class="sec-login" style="margin-bottom: 30px;">
                <div class="admin-content analysis-progrebar-ctn res-mg-t-15" id="div-login" style="width: 744px; height: 360px;">
                    <section style="text-align: center; color:white;">
                        <div>
                            <h1>LOGIN</h1>
                        </div>
                    </section>


                    <form method="POST">
                        <div class="mb-3" style="padding-bottom: 30px;">
                            <label for="exampleInputEmail1" class="form-label" style="color:white;">Login</label>
                            <input type="text" class="form-control" name="login" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3" style="padding-bottom: 20px; color:white">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" name="senha" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1" style="color:white;"> Lembrar de mim</label>
                        </div>
                        <button type="submit" name="botao-logar" class="btn btn-primary">Entrar</button>
                        <a href="Alunos/cadastro.php" style="margin-left: 490px; border: 3px solid transparent; padding: 8px 20px; border-radius: 5px; background-color: #fded078e;">
                            <font class="form-check-label" style="color:white;">Cadastrar</font>
                        </a>
                    </form>



                </div>
            </section>
        </div>
    </div>
    <div>
        <?php

          if(isset($_POST['botao-logar'])){

        
            $login = $_POST['login'];
            $senha = $_POST['senha'];

            $buscaSql = mysqli_query($link , "SELECT nome, senha FROM alunos WHERE login='$login' AND senha='$senha' limit 1");

            if($row = $buscaSql->fetch_assoc()){

              session_start();
              $_SESSION['nome'] = $row['nome'];

              print"<h1 style='color:white'>Logado</h1>";
              $redirect->acessAccept(true);
            }else{
              print"<h1 style='color:white'>Acesso negado</h1>";
            }

          }

        ?>

    </div>








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