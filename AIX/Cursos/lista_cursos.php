<style>
    *{
        box-sizing: border-box;
        color: white;
    }
    .div-cursos{
        background-color: #465687;
        height: 232px;
    }
    .div-cursos table{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    .div-cursos table tbody{
        display: flex;
        flex-direction: column;
        align-content: flex-end;
        justify-content: flex-start;
        align-items: center;
        width: 100%;
    }
    .div-cursos table tbody tr{
    
        width: 100%;
        padding: 10px 30px;
    }
    .div-cursos table tbody .first-tr{
    
        background-color: #2d3240;
        
    }
    
    .td-1{
        width: 120px;
    }
    .td-2{
        width: 300px;
    }
    .td-3{
        width: 325px;
    }
    input{
        color: black;
    }
    p{
        margin: 0;
    }
    
</style>
<div>
<h1>CURSOS :</h1>
</div>

<div style="overflow-x: hidden; overflow-y: scroll; height: 82%;">
    <table>
        <tbody>
        <tr class="first-tr">
            <td class="td-1">
            <b>Código</b>
            </td>
            <td class="td-2">
            <b>Curso</b>
            </td>
        </tr>
        <?php

            require_once "../lib/connectdb.php";

            $sql = "SELECT * FROM cursos";
            $result = $link->query($sql);
            $i = 0;
            while ($array = $result->fetch_array()) {

            $nomeCurso = $array['nome_curso'];
            $codCurso = $array['cod_curso'];

            $lineColor = $i % 2 ? "#384a80" : "#859de6";

            ?>

            <tr style="background-color: <?= $lineColor ?>">
                <td class="td-1">
                    <p><?=$codCurso?></p>
                </td>
                <td class="td-2">
                    <p><?=$nomeCurso?></p>
                </td>
            </tr>

            <?php
            $i++;
        }

        ?>
        </tbody>
    </table>
</div>