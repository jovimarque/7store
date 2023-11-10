<?php

session_start();

require_once("../class/Products.class.php");
require_once("../class/Clientes.class.php");

$clients = new Clientes();

if(isset($_POST['email']) && isset($_POST['pass'])){

	if(isset($_POST['email']) && isset($_POST['pass'])){

		if($_POST['email'] != "" && $_POST['pass'] != ""){
			
		  $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
		  $pass = $_POST['pass'];
		
		  $create = $clients->create($email, $pass);
		
		  if($create){

			$login = $clients->login($email, $pass);
			if($login){
				echo '{"error":false, "login":1, "msg":"logado"}';
			} else {
				echo '{"error":true, "login":2, "msg":"Sua conta foi criado com sucesso, faca login"}';
			}
		  } else {
			echo '{"error":true, "login":2, "msg":"Nao conseguiu criar a conta"}';
		  }
		}
	  }
}

?>

<!DOCTYPE html>
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
				<div class="top_link"><a href="#"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt=""></a></div>
				<div class="contact">
        			<form action="create.php" method="POST">

						<h3>Cadastrar</h3>

						<input type="text" name="name" placeholder="Usuario">
            			<input type="text" name="email" placeholder="Email">
						<input type="password" name="pass" placeholder="Senha">
						<button class="submit">Cadastrar</button>

					</form>
				</div>
			</div>
			<div class="right">
				<div class="right-text">

					<h2>777 Store</h2>
					<h5>A melhor loja de produtos digitais.</h5>

				</div>
				<div class="right-inductor"><img src="https://lh3.googleusercontent.com/fife/ABSRlIoGiXn2r0SBm7bjFHea6iCUOyY0N2SrvhNUT-orJfyGNRSMO2vfqar3R-xs5Z4xbeqYwrEMq2FXKGXm-l_H6QAlwCBk9uceKBfG-FjacfftM0WM_aoUC_oxRSXXYspQE3tCMHGvMBlb2K1NAdU6qWv3VAQAPdCo8VwTgdnyWv08CmeZ8hX_6Ty8FzetXYKnfXb0CTEFQOVF4p3R58LksVUd73FU6564OsrJt918LPEwqIPAPQ4dMgiH73sgLXnDndUDCdLSDHMSirr4uUaqbiWQq-X1SNdkh-3jzjhW4keeNt1TgQHSrzW3maYO3ryueQzYoMEhts8MP8HH5gs2NkCar9cr_guunglU7Zqaede4cLFhsCZWBLVHY4cKHgk8SzfH_0Rn3St2AQen9MaiT38L5QXsaq6zFMuGiT8M2Md50eS0JdRTdlWLJApbgAUqI3zltUXce-MaCrDtp_UiI6x3IR4fEZiCo0XDyoAesFjXZg9cIuSsLTiKkSAGzzledJU3crgSHjAIycQN2PH2_dBIa3ibAJLphqq6zLh0qiQn_dHh83ru2y7MgxRU85ithgjdIk3PgplREbW9_PLv5j9juYc1WXFNW9ML80UlTaC9D2rP3i80zESJJY56faKsA5GVCIFiUtc3EewSM_C0bkJSMiobIWiXFz7pMcadgZlweUdjBcjvaepHBe8wou0ZtDM9TKom0hs_nx_AKy0dnXGNWI1qftTjAg=w1920-h979-ft" alt=""></div>
			</div>
		</div>
	</section>

</body>
</html>