<?php
require_once('../class/Conn.class.php');
require_once("../pages/buy.php");
 if(isset($_POST['enviar'])){

    $status = $result->pix_create_request->status;
    $products = $data['items'][0]['description'];
    $id_transacao =$_POST['id_transacao'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
     

     $sql = $conn->prepare("INSERT INTO `orders` (value, referece, status) VALUES(:value, :id_transacao, :status ) "); 
     $sql->bindValue(":value", $value);
     $sql->bindValue(":id_transacao", $id_transacao);
     $sql->bindValue(":status", $status);
     $sql->execute();
      
  }