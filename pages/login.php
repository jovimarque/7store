<?php
session_start();
require_once("../class/Conn.class.php");

?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setes</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>

    <div class="container">
        <div class="login">
            <div class="login-card">
                <div class="login-card-content">
                    <form method="POST" action=".././system/validator.php">

                        <h1>Login</h1>

                        <h3>Endereco de email</h3>
                        <input type="email" name="email" placeholder="Digite seu email">
                        <h3>Senha</h3>
                        <input type="password" name="pass" placeholder="Digite sua senha">
                        <input type="submit" name="entrar" value="Entrar">

                        <?php
      //verifica se está setado  e se for TRUE irá retornar erro, validando a mensagem
      if(isset($_GET['login']) && $_GET['login'] == 'erro'){

  ?>

                        <h3> Login ou senha inválidos</h3>

                        <?php
      }
  ?>

                    </form>
                </div>
            </div>
        </div>
    </div>








   

</body>

</html>