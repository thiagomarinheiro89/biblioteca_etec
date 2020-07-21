<?php
include("../conexao.php");
$id = $_GET['id'];

$select = "SELECT * FROM tb_obras where id_obra = $id";
$bd = mysqli_query($conn, $select) or die(mysqli_error($conn));

if(!$bd){
  $retorno['erro'] = true;
  $retorno['nome'] = "";
} else {
  $retorno['erro'] = false;
  $retorno['nome'] = mysqli_fetch_assoc($bd)['titulo_obra'];
}

echo json_encode($retorno)



 ?>
