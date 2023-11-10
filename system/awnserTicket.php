<?php

function respostaTicket(){

require_once("../class/Conn.class.php");
require_once("../class/conn.ticket.php");
require_once("../pages/verificador.php");

		
		if(isset($_POST['responder'])){

			try{

				$id_ticket = $_POST['id_ticket'];
				$id_user = $_POST['id_user'];
				$descricao = $_POST['resposta'];

				$sql = $conn->prepare("INSERT INTO `respostaticket` (id_aberturaticket, id_user,resposta_ticket) VALUES(:idticket, :iduser, :descricao)");
				$sql->bindParam(":iduser",$id_user);
				$sql->bindParam(":idticket",$id_ticket);
				$sql->bindParam(":descricao",$descricao);

				$sql->execute();
 				
 				header('Location: ../panel/panelCustomer/listaTicket.php?r=/resposta');

			}catch(Exception $e){

				echo $e->getMessage();
			}	
	}
	

}



respostaTicket();