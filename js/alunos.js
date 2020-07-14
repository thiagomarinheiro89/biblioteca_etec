$(document).ready(function(){
  $(".load").show();
  filtrar();
});

function filtrar(){
    var texto = $("#texto").val();

    $.post("controler/lista_alunos.php", {texto:texto}, function(data){
      var retorno = JSON.parse(data);
      if(retorno['registros']==0){
        $("#tabela").empty();
        $("#tabela").append("<tr><td colspan=5><p class='alert alert-danger'>A Busca não retornou alunos!</p></tr>");
      } else {
        $("#tabela").empty();
        for (var i = 0; i < retorno['registros']; i++) {
          $("#tabela").append("<tr>"+
                                "<td>"+retorno[i]['matricula']+
                                "<td>"+retorno[i]['nome']+
                                "<td>"+retorno[i]['email']+
                                "<td>"+retorno[i]['telefone']+
                                "<td>"+retorno[i]['idade']+
                                "<td><button class='btn btn-primary' onclick='perfil("+retorno[i]['matricula']+")'>Perfil do aluno</button>"+
                              "</tr>");
        }
      }
    });
    $(".load").hide();
}

function perfil(mat){
  $(".conteudo").load("alunos/perfil.php?mat="+mat);
}

function adicionar(){
    $("#adiciona_aluno").modal("show");
}
