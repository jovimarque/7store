<?php
	require_once("../class/Conn.class.php");
		
		//cadastro de  vendedor
	try{

	if(isset($_POST['nameseller']) && isset($_POST['cpfseller']) && isset($_POST['emailseller']) && isset($_POST['telseller']) && isset($_POST['senhaseller'])){

$nameseller = $_POST['nameseller'];
$cpfseller = $_POST['cpfseller']; 
$emailseller = $_POST['emailseller'];
$telseller = $_POST['telseller'];
$senhaseller = $_POST['senhaseller'];

    $sql = $conn->prepare(" INSERT INTO  `sellers` (name,cpf,email,telefone,senha) VALUES(:nameseller,:cpfseller,:emailseller,:telseller, :senhaseller)");
    
    $sql->bindValue(":nameseller",$nameseller);
    $sql->bindValue(":cpfseller",$cpfseller);
    $sql->bindValue(":emailseller",$emailseller);
    $sql->bindValue(":telseller",$telseller);
    $sql->bindValue(":senhaseller",$senhaseller);

    $sql->execute();

    header('Location:../panel/paneladm.php?cadastroUser=sucesso');

} else {
 echo 'Erro inesperado';
}

}catch(Exception $e){


	echo'Erro inesperado | '.$e->getMessage();

}

?>
