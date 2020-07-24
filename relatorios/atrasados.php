<?php
include('../conexao.php');
 ?>

<div class='container'>
  <table class='table table-striped'>
    <thead>
      <tr>
        <th colspan='4'><center>Emprestimos Atrasados</center>
      </tr>
      <tr>
        <th>Livro
        <th>Aluno
        <th>Data Emprestimo
        <th>Data Devolução
      </tr>
    </thead>
    <tbody>

        <?php
        $sel = "SELECT o.titulo_obra, a.nome, e.data_emprestimo, e.data_devolucao FROM tb_emprestimo e
                LEFT JOIN tb_obras o ON e.id_obra = o.id_obra
                LEFT JOIN tb_alunos a ON a.matricula = e.matricula
                WHERE e.data_devolucao < NOW() AND e.status <> 'F'";
        $bd = mysqli_query($conn, $sel);

        while ($linha = mysqli_fetch_assoc($bd)) {?>
          <tr>
            <td><?php echo $linha['titulo_obra']; ?>
            <td><?php echo $linha['nome']; ?>
            <td><?php echo date("d/m/Y", strtotime($linha['data_emprestimo'])); ?>
            <td><?php echo date("d/m/Y",  strtotime($linha['data_devolucao'])); ?>
          </tr>

        <?php } ?>


    </tbody>
  </table>
