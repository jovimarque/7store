<?php
  
  try{

    $conn = new PDO("mysql:host=localhost;dbname=777store","root","");

    /*
    if($conn == true){
      echo 'conectado';
    }
    
	*/
  }catch(Exception $e){

      echo "Erro: ".$e->getMessage()." contate o desenvolvedor";

  }

?>