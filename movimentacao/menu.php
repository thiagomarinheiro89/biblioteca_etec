<div class='container'>
  <div class='row'>
    <div class='col-sm-3'>
      <button class='btn btn-primary btn-block' onclick="emprestimos()"><h1>Emprestimo</h1></button>
    </div>

    <div class='col-sm-3'>
      <button class='btn btn-primary btn-block' onclick="devolucao()"><h1>Devolção</h1></button>
    </div>

  </div>
</div>

<script>
  $(".load").hide();

  function emprestimos(){
    $(".conteudo").load("movimentacao/emprestimo.php");
  }

  function devolucao(){
    $(".conteudo").load("movimentacao/devolucao.php");
  }

</script>
