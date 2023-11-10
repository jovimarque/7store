<?php 

require_once("../../class/Conn.class.php");
require_once("../../class/conn.ticket.php");
require_once("../../pages/verificador.php");
	
	

if(isset($_POST['gerenciar'])){

	
	$id = $_POST['id_ticket'];

	$sql = $conn->prepare(" SELECT * FROM `aberturaticket` WHERE id = :id ");
	$sql->bindParam(":id",$_POST['id_ticket']);
	$sql->execute();

	$resultado = $sql->fetchAll();

	foreach ($resultado as $dados ) {
		 
		 echo'titulo '.$dados['titulo_ticket'];
		 echo '<br>';
		 echo'descrição: '.$dados['descricao_ticket'];


	}
}

