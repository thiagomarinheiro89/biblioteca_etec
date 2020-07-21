<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Sistema de Gestão de Livros</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='estilo.css'>
  <script src='funcoes.js'></script>
</head>
<body>


<?php
session_start();
include('conexao.php');

if(!isset($_SESSION['id_usuario'])){
  header("location: index.php");
}




?>

<div class='topo'>
  <p class='bem-vindo'>Bem vindo <?php echo $_SESSION['usuario']; ?></p>
</div>
<div class='fundo-menu'>
  <?php
    $select = "SELECT titulo, arquivo_base FROM tb_modulos
               ORDER BY ordem";
    $bd = mysqli_query($conn, $select) or die("Não foi possivel montar o Menu");

    while ($linha = mysqli_fetch_assoc($bd)) {?>
      <div class='bt_menu' onclick="modulo('<?php echo $linha['arquivo_base'] ?>')"><?php echo $linha['titulo'] ?></div>
    <?php } ?>

    <div class='sair' onclick='sair()'>
      Sair
    </div>

</div>
<div class='conteudo'>
  <?php
  if(isset($_REQUEST['modulo'])){
    include($_REQUEST['modulo']);
  } else {
    include("dash.php");
  } ?>

</div>
<div class='load'>
  <img src='load.gif'>
</div>

<!-- Modal -->
<div id="adiciona_aluno" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Adicionar Aluno</h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" onclick='cadastra_aluno()'>Gravar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      </div>
    </div>

  </div>
</div>
