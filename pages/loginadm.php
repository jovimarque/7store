
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setes</title>
    <link rel="stylesheet" href="../css/create.css">
</head>

<body>
    <section class="login">
        <div class="login_box">
            <div class="left">
                <div class="top_link"><a href="#"><img
                            src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download"
                            alt=""></a></div>
                <div class="contact">
                    <form method="POST" action="../system/validatoradm.php">

                        <h3>Login Adm</h3>

                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="pass" placeholder="Senha">
                        <input type="submit" name=" entrar" value="entrar">

                      <?php

                        if(isset($_GET['login']) && $_GET['login'] == 'erro'){

                      ?>

                        <h3>Login ou senha inválidos</h3>

                        <?php
                          }
                        ?>
                    </form>
                </div>
            </div>
            <div class="right">
                <div class="right-text">
                    <h2>777 Store</h2>
                    <h5>A melhor loja de produtos digitais.</h5>
                </div>
            </div>
        </div>
    </section>
</body>

</html>