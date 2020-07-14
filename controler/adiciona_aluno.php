<?php
include('../conexao.php');

$select = "SELECT ifnull(max(matricula),0)+1 as mat from tb_alunos";
$bd = mysqli_query($conn, $select);
$mat = mysqli_fetch_assoc($bd)['mat'];

if($_FILES['foto']['name']!=''){
  if(valida_image($_FILES)){
    move_uploaded_file($_FILES['foto']['tmp_name'], "../fotos/$mat.jpg");
  } else { ?>
    <script>
      alert('Imagem fora do padrão refaça o processo!')
      window.location.assign('../principal.php?modulo=alunos/alunos.php&erro=1')
    </script>
  <?php
  die();
  }

  cadastra();
} else {
  cadastra();
}

function valida_image($arquivo){
  if($arquivo['foto']['type']!='image/jpeg'){
    return false;
  } else if($arquivo['foto']['size']>1000000){
    return false;
  } else {
    return true;
  }
}

function cadastra(){
  include('../conexao.php');
  $select = "SELECT ifnull(max(matricula),0)+1 as mat from tb_alunos";
  $bd = mysqli_query($conn, $select);
  $mat = mysqli_fetch_assoc($bd)['mat'];

   $insert = "INSERT INTO tb_alunos (matricula, nome, data_nasc, email, telefone) VALUES
             ($mat, '".$_POST['nome']."', '".$_POST['nasc']."', '".$_POST['email']."','".$_POST['telefone']."')";
   $bd = mysqli_query($conn, $insert) or die();?>
   <script>
     alert('Aluno cadastrado com sucesso!')
     window.location.assign('../principal.php?modulo=alunos/alunos.php')
   </script>
   <?php
 }


 ?>
