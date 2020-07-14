<?php
include('conexao.php');
 ?>


<!-- div que verifica a largura da tela e justifica o tamanho -->
<div class="container">
  <!-- painel de adição e edição dos usuarios -->
  <div class="panel panel-primary">
      <div class="panel-heading">Adcionar / Editar Usuários</div>
      <div class="panel-body">

        <!-- Formulário de dados -->
        <form name='form-usuario' id='form-usuario'>
          Nome do Usuário
          <input type='text' name='nome' class='form-control' id='nome'>
          Login
          <input type='text' name='login' class='form-control' id='login'>
          Senha
          <input type='password' name='senha' id='senha' class='form-control'>
          Confirme a senha
          <input type='password' name='confirma_senha' id='confirma_senha' class='form-control'>
          <input type='hidden' name='id' id='id'>
        </form>
        <br>
        <button class='btn btn-primary' onclick="gravar()" style='float:right;' id='bt_gravar'>Gravar</button>
        <button class='btn btn-primary' onclick="grava_edicao()" style='float:right; display:none' id="bt_editar">Gravar Edição</button>
      </div>
  </div>

    <table class='table table-striped'>
      <thead>
        <tr>
          <th>Nome Do Usuário
          <th>Login
          <th>
        </tr>
      </thead>
      <tbody>
        <?php
          $select = "SELECT * from tb_usuario";
          $bd = mysqli_query($conn, $select);

          while ($linha = mysqli_fetch_assoc($bd)) {?>
            <tr>
              <td><?php echo $linha['Nome']; ?>
              <td><?php echo $linha['login']; ?>
              <td align='right'><a href='#' onclick='edita(<?php echo $linha['id_usuario'] ?>)' class='btn btn-primary'>Editar</a>
                                <a href='#' onclick='deleta(<?php echo $linha['id_usuario'] ?>)' class='btn btn-danger'>Deletar</a>
          <?php } ?>
      </tbody>
    </table>
</div>

<script>
function gravar(){
  var nome = $("#nome").val();
  var login = $("#login").val();
  var senha = $("#senha").val();
  var confirma_senha = $("#confirma_senha").val();

  if(senha==""){
    alert("Por favor digite a senha!");
    $("#senha").focus();
  } else if(senha != confirma_senha){
    alert("A Senhas não conferem!");
    $("#senha").focus();
  } else if(nome=="" || login==""){
    alert("Por favor preencha todos os campos!");
    $("#nome").focus();
  } else{
    $.post("adiciona_usuario.php", $("#form-usuario").serialize(), function(data){
      alert(data);
      $(".conteudo").load("usuarios.php")
    });
  }
}

function deleta(id){
  var confirma = confirm("Deseja realmente deletar esse usuário \n Esse procedimento não pode ser desfeito");

  if(confirma==true){
    $.get("deleta_usuario.php?id="+id, function(data){
      alert(data);
      $(".conteudo").load("usuarios.php");
    });
  }
}

function edita(id){
  $("#id").val(id);

  $.get("dados_usuario.php?id="+id, function(data){
    var retorno = JSON.parse(data);
    $("#nome").val(retorno['nome']);
    $("#login").val(retorno['login']);
    $("#login").attr("Disabled",true);
    $("#bt_gravar").hide();
    $("#bt_editar").show();
  });
}

function grava_edicao(){

  //dsadasdad

  /*
  dsadasdasd
  dsadasdasd
  */


  var nome = $("#nome").val();
  var senha = $("#senha").val();
  var confirma = $("#confirma_senha").val();

  if(senha != confirma){
    alert("As senha não conferem!");
    $("#senha").focus();
  } else{
    $.post("edita_usuario.php", $("#form-usuario").serialize(), function(data){
      alert(data);
      $(".conteudo").load("usuarios.php");
    });
  }

}

</script>
