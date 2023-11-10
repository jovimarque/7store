<?php

require_once("../../class/Conn.class.php");
require_once("../../class/conn.ticket.php");
require_once("../../pages/verificador.php");

	$sql = $conn->prepare(" SELECT * FROM `aberturaticket` ");
	$sql->execute();
	$result = $sql->fetchAll();

		

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Listagem Ticket  </title>
</head>
<body>

	<table>
		<tr>
			<th>#</th>
			<th>TITULO</th>
			<th>GERENCIAR</th>
		</tr>
		<?php foreach ($result as $dados) {?>	
		<tr>
			
			<td><?php echo $dados['id'];?></td>
			<td><?php echo $dados['titulo_ticket'];?></td>
			<td>
					
				<form method="post" action="responseTicket.php">
						<input type="hidden" name="id_ticket" value="<?php echo $dados['id'];?>">
						<button type="submit" name="gerenciar" > <?php echo  $dados['id'];?> </button>	
				</form>						

			</td>
		</tr>
		<?php
			}



		?>	
	</table>

</body>
</html>