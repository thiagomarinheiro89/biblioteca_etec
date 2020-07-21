<?php
include("../conexao.php");

$update = "UPDATE tb_emprestimo SET `status`='F', data_devolucao = NOW() WHERE id_obra = ".$_GET['id']." AND `status` = 'E'";
$bd = mysqli_query($conn, $update) or die("Não foi possível realizar a devolução");

echo "Devolução cadastrada com sucesso!";


 ?>
