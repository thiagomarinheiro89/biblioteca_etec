<?php

#Isso é um comentário

//Isso tbm é um comentário


/* 
asdfasdfasdfsadf
fsadfasdfsa
*/


include('conexao.php');

$update = "UPDATE tb_usuario SET Nome = '".$_POST['nome']."', Senha = '".$_POST['senha']."' WHERE id_usuario = ".$_POST['id'];
$bd = mysqli_query($conn, $update) or die("Não foi possível realizar a alteração!");

echo "Usuário alterado com sucesso";

 ?>
