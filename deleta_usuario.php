<?php
include('conexao.php');

$delete = "DELETE FROM tb_usuario where id_usuario = ".$_REQUEST['id'];

$bd = mysqli_query($conn, $delete) or die("Não foi possivel deletar o usuário");

echo "Usuário deletado com sucesso!";

 ?>
