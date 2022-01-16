
function validacaoAluno(){

    var idDigitado = $('#id_digitado').val();

    $.ajax({
        url : "verifica_aluno.php",
        method : 'post',
        data : {
            id : idDigitado
        },
        beforeSend : function(){
            $("#div-login").html("ENVIANDO...");
        }
    })
    .done(function(msg){
        $("#div-login").html(msg);
    })
    .fail(function(jqXHR, textStatus, msg){
        alert(msg);
    });

};

function validacaoAlunoToDelete(){

    var idDigitado = $('#id_digitado').val();

    $.ajax({
        url : "verifica_aluno-2.php",
        method : 'post',
        data : {
            id : idDigitado
        },
        beforeSend : function(){
            $("#div-ajax").html("ENVIANDO...");
        }
    })
    .done(function(msg){
        $("#div-ajax").html(msg);
    })
    .fail(function(jqXHR, textStatus, msg){
        alert(msg);
    });

};

function load_page(pagina){

    var idDigitado  = $('#id_digitado_input').val();

    $.ajax({
        url : pagina,
        method : 'post',
        data : {
            id : idDigitado
        }

    }).done(function(pagina){
        $("#div-login").html(pagina);
    }).fail(function(jqXHR, textStatus, msg){
        alert("Erro load page");
    });

}

function load_pageToDelete(pagina){

    var idDigitado  = $('#id_digitado_input').val();

    $.ajax({
        url : pagina,
        method : 'post',
        data : {
            id : idDigitado
        }

    }).done(function(pagina){
        $("#div-ajax").html(pagina);
    }).fail(function(jqXHR, textStatus, msg){
        alert("Erro load page");
    });

}

function atualizarAluno(){
 
    var new_code      = $('#new_code').val();
    var new_name    = $('#new_name').val();
    var new_login   = $('#new_login').val();
    var new_password= $('#new_password').val();
    var new_mail    = $('#new_mail').val();
    var new_curso    = $('#new_curso').val();
    var new_turma    = $('#new_turma').val();
    // var ativo       = $('#ativo').val();

    var id  = $('#idinputhid').val();


    $.ajax({
        url: "atualizar_aluno.php",
        method : "post",
        data : {
            new_name : new_name,
            new_login : new_login,
            new_password : new_password,
            new_mail : new_mail,
            id : id,
            new_curso : new_curso,
            new_turma : new_turma,
            new_code  : new_code,
        }
    }).done(function(pagina){
        $("#div-login").html(pagina);
    }).fail(function(jqXHR, textStatus, msg){
        alert(msg);
    });
}











