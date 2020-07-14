<div class='container'>
  <div class="panel panel-primary">
      <div class="panel-heading">Filtrar Alunos</div>
      <div class="panel-body">
        Nome do Aluno:
        <input type='text' class='form-control' id='texto'>
        <br>
        <p align='right'>
          <button class='btn btn-primary' onclick='filtrar()'>Filtrar</button>
          <button class='btn btn-success' id = 'bt_adicionar' onclick='adicionar()'>Adicionar</button>
        </p>
      </div>
  </div>

  <?php
  if(isset($_GET['erro'])){?>
    <div class='alert alert-danger'>
      Ocorreu um erro ao cadatrar o aluno!
    </div>
    <?php
  }
   ?>



  <table class='table table-striped'>
    <thead>
      <tr>
        <th>Mat
        <th>Nome
        <th>email
        <th>Telefone
        <th>Idade
        <th>
      </th>
    </thead>
    <tbody id='tabela'>

    </tbody>
  </table>

</div>


<script src='js/alunos.js'></script>
