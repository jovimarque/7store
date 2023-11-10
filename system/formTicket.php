<?php

/*
	este sistema  código tem outro banco de dados  nome do arquivo é conn.ticket.php 
	o nome do banco de dados é storeticket
*/

	function insertData(){
		try {

					if(isset($_POST['openticket'])){

						require_once("../class/conn.ticket.php");
						require_once("../pages/verificador.php");

						$iduser = $_POST['iduser'];
						$titleTicket = $_POST['titulo_ticket'];
						$descriptionTicket = $_POST['descricao_ticket'];

						$sql = $conn->prepare("INSERT INTO `aberturaticket`	(id_user, titulo_ticket, descricao_ticket) VALUES(:iduser, :titulo, :descricao)");
						$sql->bindParam(":iduser",$iduser);
						$sql->bindParam(":titulo",$titleTicket);
						$sql->bindParam(":descricao",$descriptionTicket);
						$sql->execute();

						
						header('Location: ../panel/panelCustomer/openTicket.php?r=/Abertura');

					}//ifelse
				
					} catch (Exception $e) {
						
						echo $e->getMessage();
				}//try-catch
	}//function
	
//chama a função para a execução do código
insertData();