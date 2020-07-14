<?php
  session_start();
  session_destroy();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistema de Gestão de Livros</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-3'>
      </div>
      <div class='col-sm-6'>
        <center>
          <img src='logo.jpg' height='100px'>
        </center>
        <form method='post' action='login.php'>
          Login:
          <input type='text' name='login' class='form-control'>
          Senha:
          <input type='password' name='senha' class='form-control'>
          <br />
          <div class='mensagem'>
            <?php
            if(isset($_GET['erro'])){?>
              <p class='alert alert-danger'>
                <b>Erro!<b> Usuário ou senha incorretos
              </p>
            <?php } ?>
          </div>
          <br>
          <center>
            <input type='submit' value='Logar' class='btn btn-primary'>
            <input type='Reset' value='Limpar' class='btn btn-warning'>
            <a href='http://localhost/etec/aulas/?aula=7' class='btn btn-danger'>Cancelar</a>
          </center>


        </form>
      </div>
      <div class='col-sm-3'>
      </div>
    </div>
  </div>
</body>
</html>
