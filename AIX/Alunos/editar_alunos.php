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
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
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
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="editar_alunos_fixx.js"></script>
    
    

    <?php

      require_once "../lib/connectdb.php";
        

    ?>
</head>

<body>
    

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="../index.html"><img class="main-logo" src="../assets/img/logo/logo.png" alt="" /></a>
                <strong><img src="../assets/img/logo/logosn.png" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="../assets/img/notification/default-user-image.png" alt="" /></a>
					<h2>Usuário</h2>
				</div>
				<div class="profile-social-dtl">
					<ul class="dtl-social">
						<li><a href="#"><i class="icon nalika-facebook"></i></a></li>
						<li><a href="#"><i class="icon nalika-twitter"></i></a></li>
						<li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a class="" href="../home.php">
                                <i class="icon nalika-home icon-wrap"></i>
                                <span class="mini-click-non">Voltar</span>
                            </a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    
    <!-- Start Welcome area -->
        <div class="header-advance-area" style="display:flex; flex-direction: column; align-items: center;">

            <style>
                *{
                    box-sizing: border-box;
                }
                input{
                  color: black;
                }
                .div-buscar-id{
                  display: flex;
                  flex-direction: column;
                  justify-content: center;
                  align-items: center;
                }
            </style>

            <section class="sec-edit" id="sec-edit" style="transform: translateY(70px);">
                <div class="admin-content analysis-progrebar-ctn res-mg-t-15" id="div-login" style="width: 880px;height: 800px;">
                    <section style="text-align: center; color:white;">
                        <div class="div-edit-buscar-id">
                            <h1>EDIÇÃO DE ALUNOS</h1>

                              <div class="div-buscar-id">
                                  <b>Digite o ID do aluno:</b>
                                  <input type="text" name="id_digitado" id="id_digitado">
                                  <button name="buscar-id" id="buscar-id" class="btn btn-warning" onClick="validacaoAluno()">Buscar</button>
                              </div>
                        </div>
                    </section>   
                </div>
            </section>

        </div>
    </div>

    
    <!-- jquery
		============================================ -->
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="../assets/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="../assets/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="../assets/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="../assets/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="../assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="../assets/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="../assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="../assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="../assets/js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="../assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../assets/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="../assets/js/calendar/moment.min.js"></script>
    <script src="../assets/js/calendar/fullcalendar.min.js"></script>
    <script src="../assets/js/calendar/fullcalendar-active.js"></script>
	<!-- float JS
		============================================ -->
    <script src="../assets/js/flot/jquery.flot.js"></script>
    <script src="../assets/js/flot/jquery.flot.resize.js"></script>
    <script src="../assets/js/flot/curvedLines.js"></script>
    <script src="../assets/js/flot/flot-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="../assets/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="../assets/js/main.js"></script>
</body>

</html>