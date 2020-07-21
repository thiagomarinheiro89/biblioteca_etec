function busca_nome_livro(){
  cod = $("#cod_obra").val();
  $.get("controler/nome_livro.php?dev=1&id="+cod, function(data){
    var retorno = JSON.parse(data);
    if(retorno['erro']==false && retorno['obra']!=null){
      if(retorno['obra']['situacao'] > 0){
          $("#nome_obra").val(retorno['obra']['nome']);
          $("#botao").attr("disabled", false)
        } else {
          alert("Obra não está emprestada!");
          $("#cod_obra").focus();
        }
    } else {
      alert("Obra não encontrada!");
      $("#cod_obra").focus();
    }
  });
}


function efetua_devolucao(){
  var obra = $("#cod_obra").val();

  var r = confirm("Deseja realmente cadastrar a devolução?");

  if(r == true){
    $.get("controler/efetua_devolucao.php?id="+obra, function(data){
        alert(data);
        $(".conteudo").load('movimentacao/menu.php');
    });
  } else {
        $(".conteudo").load('movimentacao/menu.php');
  }


}
