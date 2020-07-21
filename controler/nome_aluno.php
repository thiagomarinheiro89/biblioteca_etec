<?php
include("../conexao.php");
$mat = $_GET['mat'];

$select = "SELECT * FROM tb_alunos where matricula = $mat";
$bd = mysqli_query($conn, $select) or die(mysqli_error($conn));

if(!$bd){
  $retorno['erro'] = true;
  $retorno['nome'] = "";
} else {
  $retorno['erro'] = false;
  $retorno['nome'] = mysqli_fetch_assoc($bd)['nome'];
  $retorno['data_dev'] = date("Y-m-d", strtotime("+10 days", strtotime(date("Y/m/d"))));
}

echo json_encode($retorno)



 ?>
