<?php
include('../conexao.php');

$update = "UPDATE tb_alunos SET nome='".str_replace("'", "", $_POST['nome'])."', data_nasc='".$_POST['data_nasc']."', email='".$_POST['email']."', telefone='".$_POST['telefone']."' WHERE matricula = ".$_POST['matricula'];
$bd = mysqli_query($conn, $update) or die("Não Foi possível realizar a alteração");
echo "Dados alterados com sucesso!";

 ?>
