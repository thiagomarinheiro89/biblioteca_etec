$(document).ready(function(){
  lista_livros();
});

function lista_livros(){
  $.get("processa_livros.php?acao=listar", function(data){
    var retorno = JSON.parse(data);
    $("#tabela").empty();

    for(var i = 0; i < retorno['registros']; i++) {
      $("#tabela").append("<tr>"+
                            "<td>"+retorno[i]['id_obra']+
                            "<td>"+retorno[i]['titulo_obra']+
                            "<td>"+retorno[i]['autor_obra']+
                            "<td>"+retorno[i]['tipo_obra']+
                            "<td align='right'><button class='btn btn-primary' onclick='edita_livro("+retorno[i]['id_obra']+")'>Editar</button> "+
                                 " <button class='btn btn-danger' onclick='deleta_livro("+retorno[i]['id_obra']+")'>deletar</button>"+
                          "</tr>");
    }

  });
}


function gravar(){
  var id_livro =  $("#id_livro").val();

  if(id_livro==""){

    if($("#titulo").val()=="" || $("#tipo").val()==""){
      alert("Por favor verifique os campos Título e Tipo");
    } else {
      var titulo = $("#titulo").val();
      var autor = $("#autor").val();
      var tipo = $("#tipo").val();


      $.post("processa_livros.php?acao=adicionar", {titulo:titulo, autor:autor, tipo:tipo}, function(data){
        alert(data);
        limpa();
        lista_livros();
      });
    }

  } else {
    if($("#titulo").val()=="" || $("#tipo").val()==""){
      alert("Por favor verifique os campos Título e Tipo");
    } else {
      var titulo = $("#titulo").val();
      var autor = $("#autor").val();
      var tipo = $("#tipo").val();
      var id = $("#id_livro").val();


      $.post("processa_livros.php?acao=edita", {titulo:titulo, autor:autor, tipo:tipo, id:id}, function(data){
        alert(data);
        limpa();
        lista_livros();
      });
    }
  }
}

function limpa(){
  $("#titulo").val("");
  $("#autor").val("");
  $("#tipo").val("");
  $("#id_livro").val("");
}


function deleta_livro(id){
  var confirma = confirm("Deseja Realmente deletar essa obra?")

  if(confirma == true){
    $.get("processa_livros.php?acao=excluir&id="+id, function(data){
      alert(data);
      lista_livros();
    });
  }
}

function edita_livro(id){
  $("#id_livro").val(id);
  $.get("processa_livros.php?acao=dados_livro&id="+id, function(data){
    var retorno = JSON.parse(data);
    $("#titulo").val(retorno[0]['titulo_obra']);
    $("#autor").val(retorno[0]['autor_obra']);
    $("#tipo").val(retorno[0]['tipo_obra']);
  });
}
