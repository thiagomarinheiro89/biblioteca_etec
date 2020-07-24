$(document).ready(function(){
  $.get("controler/dados_dash.php", function(data){
      var retorno = JSON.parse(data);

      $("#qtn_alunos").text(retorno['alunos']);
      $("#qtn_emprestimos").text(retorno['emprestimos']);
      $("#qtn_obras").text(retorno['obras']);

      $(".load").hide();
  });
})
