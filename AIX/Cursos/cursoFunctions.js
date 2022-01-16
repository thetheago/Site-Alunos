
function cadastrarCurso(){

    let nomeCurso = $('#nomecurso').val();
    let codCurso = $('#codigocurso').val();

    $.ajax({
        url : "cadastro_curso.php",
        method: "post",
        data : {
            nomeCurso : nomeCurso,
            codCurso : codCurso
        }
    
    }).done(function(retorno){
        $("#div-cadastro-curso").html(retorno);
    }).fail(function(jqXHR, textStatus, msg){
        alert(msg);
    });
};

function validarCurso(){


    let codCursoPesquisa = $('#codCursoPesquisa').val();
    $.ajax({
        url : "verifica_curso.php",
        method: "post",
        data : {
            codCursoPesquisa : codCursoPesquisa
        }
    
    }).done(function(retorno){

        $(".div-cursos").html(retorno);


    }).fail(function(jqXHR, textStatus, msg){
        alert(msg);
    });


};

function load_page(pagina){

    var nome_curso  = $('#nomecurso').val();

    $.ajax({
        url : pagina,
        method : 'post',
        data : {
            nome_curso : nome_curso
        }

    }).done(function(pagina){
        $(".div-cursos").html(pagina);
    }).fail(function(jqXHR, textStatus, msg){
        alert(msg);
    });

};

function atualizarCurso(){

    var cod_curso_digitado  = $('#cod').val();
    var nome_curso_digitado  = $('#nome').val();
    var nome_validacao      = $("#nomecurso").val();

    $.ajax({
        url : "editar_curso-3.php",
        method: "post",
        data: {
            cod_digitado : cod_curso_digitado,
            nome_digitado : nome_curso_digitado,
            nome_validacao : nome_validacao

        }

    }).done(function(back){
        $(".div-cursos").html(back);
    }).fail(function(jqXHR, textStatus, msg){
        alert(msg);
    });

};


// ==================================================================================================================


function excluirCurso(){

    let codCursoPesquisa = $("#codCursoPesquisa").val();

    $.ajax({
        url : "excluir_curso-1.php",
        method: "post",
        data: {
            codCursoPesquisa : codCursoPesquisa
        }

    }).done(function(back){
        $("#div-ajax").html(back);
    }).fail(function(jqXHR, textStatus, msg){
        alert(msg);
    });

}


function deleteCurso(){

    let id = $("#codcurso").val();

    $.ajax({
        url : "excluir_curso-2.php",
        method: "post",
        data: {
            id : id
        }

    }).done(function(back){
        $("#div-ajax").html(back);
    }).fail(function(jqXHR, textStatus, msg){
        alert(msg);
    });

}