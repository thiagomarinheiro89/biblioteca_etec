<?php
include('../conexao.php');

if(file_exists("../fotos/".$_GET['mat'].".jpg")){
  $foto = "fotos/".$_GET['mat'].".jpg";
} else {
  $foto = "../fotos/nofoto.jpg";
}

$select = "SELECT * from tb_alunos a where a.matricula = ".$_GET['mat'];
$bd = mysqli_query($conn, $select);
$dados_aluno = mysqli_fetch_assoc($bd);
?>

<center><h1>Perfil do Aluno</center>

<div class='container'>
  <form id='dados_aluno'>
  <table class='table table-striped'>
    <tr>
      <td rowspan='5' width='310px'><center><img src="<?php echo $foto; ?>" width='200px' height='300px'><center>
      <td>Nome:
          <input type='text' name = 'nome' id = 'nome' class='form-control' value='<?php echo $dados_aluno['nome']; ?>'>
    </tr>
    <tr>
      <td>E-mail:
          <input type='text' name = 'email' id = 'email' class='form-control' value='<?php echo $dados_aluno['email']; ?>'>
    </tr>
    <tr>
      <td>Telefone:
          <input type='text' name='telefone' id = 'telefone' class='form-control' value='<?php echo $dados_aluno['telefone']; ?>'>
    </tr>
    <tr>
      <td>Data de nascimento:
          <input type='date' name='data_nasc' id = 'data_nasc' class='form-control' value='<?php echo $dados_aluno['data_nasc']; ?>'>
          <input type='hidden' name='matricula' value='<?php echo $_GET['mat']; ?>'>
      </form>
    </tr>
    <tr>
      <td align='right'><buton class='btn btn-primary' onclick='gravar()'>Gravar</button>
    </tr>
  </table>
</div>


<script>
function gravar(){
  if($("#nome").val()=='' || $("#email").val()==""){
    alert("Por favor digite o nome e o e-mail do aluno");
  } else {
    $.post("controler/update_aluno.php", $("#dados_aluno").serialize(), function(data){
        alert(data);
        $(".conteudo").load("alunos/perfil.php?mat=<?php echo $_GET['mat']; ?>");
    });
  }


}
</script>
