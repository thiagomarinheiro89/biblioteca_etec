<?php
session_start();

// Conexao com o Banco de dados
$conn = mysqli_connect("localhost", "root", "", "bd_etec");

// Query
$select = "SELECT * FROM tb_usuario WHERE login='".$_POST['login']."'";
$bd = mysqli_query($conn, $select);

// Array de dados*
$dados = array();
$conta = 0;
while($linha = mysqli_fetch_assoc($bd)){
  $dados[$conta] = $linha;
  $conta++;
}

if($dados[0]['Senha']==$_POST['senha']){
  $_SESSION['usuario'] = $dados[0]['Nome'];
  $_SESSION['id_usuario'] = $dados[0]['id_usuario'];
  header("location:principal.php");
} else {
  header("location:index.php?erro=1");

}


?>
