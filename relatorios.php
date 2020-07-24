<div class='container'>
    <table class='table table-striped'>
      <thead>
        <tr>
          <td>Relatório
          <td width='50'>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Relatório de emprestimos Atrasados
          <td><button class='btn btn-primary' onclick='relatorio("atrasados.php")'>Gerar</a>
        </tr>
      </tbody>
    </table>

<script>
function relatorio(arquivo){
  $(".conteudo").load("relatorios/"+arquivo);
}

</script>
