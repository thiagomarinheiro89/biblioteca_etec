<?php
include('../conexao.php');

$insert = "INSERT INTO tb_emprestimo (id_obra, matricula, data_emprestimo, data_devolucao, `status`)
                              VALUE (".$_GET['obra'].", ".$_GET['aluno'].", now(), '".$_GET['dev']."', 'E')";
$bd = mysqli_query($conn, $insert) or die("Não foi possivel realizar o empréstimo");

echo "Empréstimo realizado com sucesso!";




 ?>
