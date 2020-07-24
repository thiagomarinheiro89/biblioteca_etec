<?php
include("../conexao.php");

$sel = "SELECT MAX(obra) AS obras, MAX(alunos) AS alunos, MAX(emprestimos) AS emprestimos FROM (
        SELECT COUNT(*) AS obra, 0 AS alunos,0 AS emprestimos FROM tb_obras WHERE excluido=0
        UNION
        SELECT 0 AS obra, COUNT(*) AS alunos,0 AS emprestimos FROM tb_alunos
        UNION
        SELECT 0 , 0, COUNT(*) FROM tb_emprestimo WHERE data_devolucao < NOW() AND STATUS <> 'F' ) AS Dados";
$bd = mysqli_query($conn, $sel);

echo json_encode(mysqli_fetch_assoc($bd));

 ?>
