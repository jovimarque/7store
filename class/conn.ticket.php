<?php
  
  try{

    $conn = new PDO("mysql:host=localhost;dbname=ticketstore","root","");

  
  }catch(Exception $e){

      echo "Erro: ".$e->getMessage()." contate o desenvolvedor";

  }

/*

arquivo de conexão do banco de dados do ticket 


*/

?>

