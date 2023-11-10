<?php
		require_once("../class/Conn.class.php");
		require_once("../pages/verificador.php");
		
		try{


			if(isset($_POST['cadastrarUsuario'])){
			$nomeCliente = $_POST['nomeCliente'];
			$emailCliente = $_POST['emailCliente']; 
			$senhaCliente = $_POST['senhaCliente'];
			$nivelComum = $_POST['nivelComum'];
			
			$sql = $conn->prepare(" INSERT INTO  `users` (name,email,pass,nivel) VALUES(:nomeCliente,:emailCliente,:senhaCliente,:nivelComum)");
				$sql->bindValue(":nomeCliente",$nomeCliente);
				$sql->bindValue(":emailCliente",$emailCliente);
				$sql->bindValue(":senhaCliente",$senhaCliente);
				$sql->bindValue(":nivelComum",$nivelComum);

						$sql->execute();

						header('Location:../pages/cadastro.php');


						}else{

							echo '<h4> Erro ao cadastrar, por favor verifique os dados </h4>';				

						}



		}catch(Exception $e){



						echo'Erro |'.$e->getMessage().' Por favor contate o desenvolvedor';


		}



?>