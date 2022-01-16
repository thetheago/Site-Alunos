<?php
    session_start();

    abstract class functionSend{

        protected function changePage($validacao){

            if($validacao == true){
                ?>

                <script>window.location.href="http://localhost/AIX/home.php";</script>
    
                <?php
            }else{
                echo"acesso negado";
            }
          
        }
    }

    class sendPage extends functionSend{

        function acessAccept($check) {
            $this->changePage($check);
        }


    }









?>