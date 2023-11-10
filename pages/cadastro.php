<?php

require_once("../class/Conn.class.php");
require_once("../pages/verificador.php");
	


?>

<!DOCTYPE html>
<html>
<head>
	<title> PAGINA CADASTRO</title>
</head>
<body>

<form method="post" action="../system/cadastroUsuario.php">
		
		::Nome
		<br>
		<input type="text" name="nomeCliente" placeholder="seu nome completo "required>
		<br>
		::Email
		<br>
		<input type="email" name="emailCliente" placeholder="exemplo@email.com" required>
		<br>
		::Senha
		<br>
		<input type="password" name="senhaCliente" placeholder="senha de sua preferencia" required>
		<br>
		<input type="hidden" name="nivelComum" value="2">
		<br>
		<input type="submit" name="cadastrarUsuario" value="Cadastrar">




</form>


</body>
</html>