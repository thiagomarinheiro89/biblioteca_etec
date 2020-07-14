<?php
include('conexao.php');

$id = $_REQUEST['id'];
$retorno = array();

$select = "SELECT nome, login FROM tb_usuario WHERE id_usuario = ".$id;
$bd = mysqli_query($conn, $select) or die("Não foi possível resgatar os valores!");

while($linha = mysqli_fetch_assoc($bd)){
  $retorno['nome'] = $linha['nome'];
  $retorno['login'] = $linha['login'];
}

echo json_encode($retorno);

 ?>
