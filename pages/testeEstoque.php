<?php
require_once("../../class/Conn.class.php");
require_once("../../verificador.php");

 $email_id=  $_SESSION['usuario'];
?>
<form method="post">
    <?php
	

			$stmt = $conn->prepare("SELECT * FROM `users ` WHERE EMAIL = :email_id ");
				$stmt->bindValue(":email_id", $email_id );
				$stmt->execute();

				if($email_id == 'sw@gmail.com'|| $email_id == 'rodrigo@gmail.com'){

					if(isset($_POST['cadastroEstoque'])){

					$nome = $_POST['nomeProduto'];
					$produto= $_POST['quantidadeProduto'];		
					$sql = $conn->prepare("INSERT INTO estoque (nome, quantidade, id_email) VALUES(:nomeProduto, :quantidadeProduto, :id_email)");
						$sql->bindValue(":nomeProduto",$nome);
						$sql->bindValue(":quantidadeProduto",$produto);
						$sql->bindValue(":id_email",$email_id);	
							$sql->execute();
					}

?>

    <input type="hidden" name="id_email" value="<?php echo $email_id;?>">
    ::NOME PRODUTO
    <br>
    <input type="text" name="1" placeholder="ex: Fulano do Ciclano e Beltrano">
    <br>
    ::QUANTIDADE
    <br>
    <input type="text" name="quantidadeProduto" placeholder="ex 10">
    <br>
    <input type="submit" name="cadastroEstoque" value="Cadastrar">

</form>
<?php
}else{

	 header("Location:index.php?erro=não tem permissão");
}

?>