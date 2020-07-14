<?php
include('../conexao.php');

$select = "SELECT * FROM tb_alunos a
           WHERE nome LIKE '%".$_POST['texto']."%' OR email LIKE '%".$_POST['texto']."%' OR matricula LIKE '%".$_POST['texto']."%'";
$bd = mysqli_query($conn, $select);

$retorno =array();
$conta = 0;

while ($linha = mysqli_fetch_assoc($bd)) {
  $retorno[$conta] = $linha;
  $retorno[$conta]['idade'] = date("Y") - date("Y", strtotime($linha['data_nasc']));
  $conta++;
}

$retorno['registros'] = $conta;

echo json_encode($retorno);

 ?>
