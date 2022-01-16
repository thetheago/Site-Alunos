


function cadastrarAluno(){
    
    let botao = $('#botao-cadastro').val();
    let nome = $('#nome').val();
    let login = $('#login').val();
    let senha = $('#senha').val();
    let cep = $('#cep').val();
    let email = $('#email').val();
    let numero = $('#numero').val();
    let complemento = $('#complemento').val();
    let curso = $('#curso').val();
    let turma = $('#turma').val();
    
    $.ajax({
        url : "cadastro-2.php",
        method : "post",
        data : {
            botaoCadastro : botao,
            nome : nome,
            login : login,
            senha : senha,
            cep : cep,
            email : email,
            numero : numero,
            complemento : complemento,
            curso : curso,
            turma : turma

        },
        beforeSend : function(){
            $("#sec-ajax").html("ENVIANDO...");
        }
    }).done(function(pagina){
        $("#sec-ajax").html(pagina);
    }).fail(function(jqXHR, textStatus, msg){
        alert(msg);
    });

}