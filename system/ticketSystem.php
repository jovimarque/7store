<?php

require_once("../class/Conn.class.php");
require_once("../class/conn.ticket.php");
require_once("../pages/verificador.php");


	
		
				try {
				

							//pega o id do usuário passado via metodo post 
							$id	 = $_POST['userid'];
							$sql = $conn->prepare("SELECT * FROM users WHERE id = :id ");
							$sql->bindValue(":id",$id);
							$sql->execute();

				
								//envia a informação para o banco de dados de acordo com o id do usuário
							if(isset($_POST['ticket'])){

								$userid = $id;
								$description = $_POST['description'];
		
								$query = $conn->prepare("INSERT INTO `aberturaticket` (id_user, descricao_ticket ) VALUES(:userid,:description)");
								 $query->bindParam(":userid", $userid);
								  $query->bindParam(":description",$description);
								   $query->execute();
									header('Location: ../panel/panelCustomer/ticket.php?r=/ticket');

							}//ifelse




				} catch (Exception $e) {
						
						echo '<h3>Erro ||'.$e->getMessage().' Contate o desenvolvedor </h3>';  

				}//try-catch





