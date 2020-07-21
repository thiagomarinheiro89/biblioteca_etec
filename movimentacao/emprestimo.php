<div class='container'>
  <div class="panel panel-primary">
      <div class="panel-heading">Cadastrar Empréstimo</div>
      <div class="panel-body">
        <table class='table table-striped'>
          <tr>
            <td width='100px'>Cod. Obra
                <input type='text' name='cod_obra' id='cod_obra' class='form-control' onchange="busca_nome_livro()" onfocus='$("#matricula").attr("disabled", true)'>
            <td><br>
                <input type='text' id='nome_obra' class='form-control' disabled>
          </tr>
          <tr>
            <td>Matrícula:
                <input type='text' name='matricula' id='matricula' class='form-control' onchange="busca_nome_aluno()" disabled>
            <td><br>
                <input type='text' id='nome_aluno' class='form-control' disabled>
          </tr>
          <tr>
            <td>Data Devolução:
                <input type='date' name='data_dev' id='data_dev' class='form-control' disabled>
            <td><br><button class='btn btn-primary' id='botao' onclick='efetua_emprestimo()' disabled>Finalizar</button>
          </tr>
        </table>

      </div>
  </div>

</div>

<script src='js/emprestimo.js'></script>
