<?php
include('conexao.php');

$insert = "INSERT INTO tb_usuario (Nome, Login, senha) VALUES ('".$_POST['nome']."','".$_POST['login']."','".$_POST['senha']."')";

$bd = mysqli_query($conn, $insert) or die("Não foi possivel realizar a inclusão");

echo "Usuario cadastrado com sucesso!";

 ?>
