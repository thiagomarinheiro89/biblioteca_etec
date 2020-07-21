function busca_nome_livro(){
  cod = $("#cod_obra").val();
  $.get("controler/nome_livro.php?id="+cod, function(data){
    var retorno = JSON.parse(data);
    if(retorno['erro']==false && retorno['nome']!=null){
      $("#nome_obra").val(retorno['nome']);
      $("#matricula").attr("disabled", false);

    } else {
      alert("Obra não encontrada!");
      $("#cod_obra").focus();
    }
  })
}

function busca_nome_aluno(){
  mat = $("#matricula").val();
  $.get("controler/nome_aluno.php?mat="+mat, function(data){
    var retorno = JSON.parse(data);
    if(retorno['erro']==false && retorno['nome']!=null){
      $("#nome_aluno").val(retorno['nome']);
      $("#data_dev").val(retorno['data_dev']);
      $("#data_dev").attr("disabled", false);
      $("#botao").attr("disabled", false);
    } else {
      alert("Obra não encontrada!");
      $("#cod_obra").focus();
    }
  })
}

function efetua_emprestimo(){
  var obra = $("#cod_obra").val();
  var aluno = $("#matricula").val();
  var dev = $("#data_dev").val();

  var url = "?obra="+obra+"&aluno="+aluno+"&dev="+dev;

  $.get("controler/efetua_emprestimo.php"+url, function(data){
      alert(data);
      $(".conteudo").load('movimentacao/menu.php');
  });
}
