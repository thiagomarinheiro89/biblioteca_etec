<?php
include("conexao.php");






switch ($_GET['acao']) {
  case 'adicionar':
    /*Adicionar um livro*/
    $insert = "INSERT INTO tb_obras (titulo_obra, autor_obra, tipo_obra, excluido)
                VALUES ('".$_REQUEST['titulo']."', '".$_REQUEST['autor']."', '".$_REQUEST['tipo']."', 0)";
    $bd = mysqli_query($conn, $insert) or die("Não foi possível realizar o cadastro do livro");
    echo "Livro cadastrado com sucesso";


  break;
  case 'listar':
    $select = "SELECT * FROM tb_obras where excluido = 0 order by titulo_obra";
    $bd = mysqli_query($conn, $select);

    $retorno = array();
    $conta = 0;

    while($linha = mysqli_fetch_assoc($bd)){
      $retorno[$conta] = $linha;
      $conta++;
    }

    $retorno['registros'] = $conta;

    echo json_encode($retorno);

  break;
  case 'excluir':
    /*Excluir um livro*/
    $del = "DELETE FROM tb_obras where id_obra = ".$_REQUEST['id'];
    $bd = mysqli_query($conn, $del) or die("Não foi possível deletar essa obra");
    echo "Obra deletada com sucesso";
  break;

  case 'dados_livro':
  $select = "SELECT * FROM tb_obras where excluido = 0 and id_obra = ".$_GET['id']." order by titulo_obra";
  $bd = mysqli_query($conn, $select);

  $retorno = array();
  $conta = 0;

  while($linha = mysqli_fetch_assoc($bd)){
    $retorno[$conta] = $linha;
    $conta++;
  }

  $retorno['registros'] = $conta;

  echo json_encode($retorno);
  break;
  default:
    /*Editar um livro*/
    $update = "UPDATE tb_obras SET titulo_obra='".$_REQUEST['titulo']."', autor_obra='".$_REQUEST['autor']."', tipo_obra='".$_REQUEST['tipo']."' where id_obra = ".$_REQUEST['id'];
    $bd = mysqli_query($conn, $update) or die("Não foi possível editar essa obra");
    echo "Obra editado com sucesso!";
  break;
}


 ?>
