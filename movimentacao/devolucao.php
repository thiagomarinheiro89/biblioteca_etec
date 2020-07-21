<div class='container'>
  <div class="panel panel-primary">
      <div class="panel-heading">Devolução de Obras</div>
      <div class="panel-body">
        <table class='table table-striped'>
          <tr>
            <td width='100px'>Cod. Obra
                <input type='text' name='cod_obra' id='cod_obra' class='form-control' onchange="busca_nome_livro()" onfocus='$("#matricula").attr("disabled", true)'>
            <td><br>
                <input type='text' id='nome_obra' class='form-control' disabled>
          </tr>
          <tr>
            <td><br><button class='btn btn-primary' id='botao' onclick='efetua_devolucao()' disabled>Finalizar</button>
          </tr>
        </table>
      </div>
  </div>

</div>

<script src='js/devolucao.js'></script>
