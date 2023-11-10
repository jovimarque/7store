<?php
	require_once("../../class/Conn.class.php");
	require_once("../../pages/verificador.php");

	$sqlUser = $conn->prepare("SELECT * FROM users");
	$sqlUser->bindParam(":iduser", $iduser);
	$sqlUser->execute();
	$row = $sqlUser->fetch();
	
	
	


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Abrir Ticket</title>
</head>
<style type="text/css">
	
	form{
		border: 1px solid black;
		padding: 40px;
	}
	input{
		display: block;
	}

</style>
<body>

	<form method="post" action="../../system/formTicket.php">
		<input type="hidden" name="iduser" value="<?php echo $row['id']; ?>">
		<input type="titulo" name="titulo_ticket" placeholder="titulo">
		<input type="text" name="descricao_ticket" placeholder="sua reclamação/duvida" style="width: 70%;">
		<button name="openticket" type="submit"> Registrar</button>

	</form>

</body>
</html>