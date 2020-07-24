<div class = 'container'>
  <div class='row'>
    <div class='col-sm-4'>
        <div class="panel panel-info">
            <div class="panel-heading">Obras Cadastrada</div>
            <div class="panel-body">
              <h1 style='float:right' id='qtn_obras'>0</h1>
              <br><br><br>
              <a href='#' class='btn btn-info btn-block' onclick="$('.conteudo').load('livros.html')">Ver</a>
            </div>
        </div>
    </div>
    <div class='col-sm-4'>
        <div class="panel panel-success">
            <div class="panel-heading">Alunos Cadastrados</div>
            <div class="panel-body">
              <h1 style='float:right' id='qtn_alunos'>0</h1>
              <br><br><br>
              <a href='#' class='btn btn-success btn-block' onclick="$('.conteudo').load('alunos/alunos.php')">Ver</a>
            </div>
        </div>
    </div>
    <div class='col-sm-4'>
        <div class="panel panel-danger">
            <div class="panel-heading">Empréstimos atrasados</div>
            <div class="panel-body">
              <h1 style='float:right' id='qtn_emprestimos'>0</h1>
              <br><br><br>
              <a href='#' class='btn btn-danger btn-block' onclick="$('.conteudo').load('relatorios/atrasados.php')">Ver</a>
            </div>
        </div>
    </div>
  </div>
</div>

<script src='js/dash.js'></script>
