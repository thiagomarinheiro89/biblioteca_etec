<?php
include("../conexao.php");
$id = $_GET['id'];

$select = "SELECT o.titulo_obra as nome,
            (SELECT COUNT(*) FROM tb_emprestimo e where e.id_obra = o.id_obra AND e.`status` =  'E') AS situacao
            FROM tb_obras o where id_obra = $id";
$bd = mysqli_query($conn, $select) or die(mysqli_error($conn));

if(!$bd){
  $retorno['erro'] = true;
  $retorn['obra']['nome'] = "";
} else {
  $retorno['erro'] = false;
  $retorno['obra'] = mysqli_fetch_assoc($bd);

}

echo json_encode($retorno)



 ?>
