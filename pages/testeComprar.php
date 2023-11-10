<?php
	
require_once('../class/Conn.class.php');
require_once('verificador.php');

    
    echo $_SESSION['id'];
  
	 $id  = $_GET['id'];
 	  $query = $conn->prepare("SELECT * FROM `products` WHERE id= :id");
    $query->bindValue(":id", $id);
    $query->execute();

    	echo  $_GET['id'];
    foreach ($query as $product): 

    $name = $product['name'];
    $value = $product['value'];
    

    endforeach; 


   



$data = array(
    'apiKey' =>'apk_44592867-XvUTKXDNgDrLaVeVmeikpDzISRrAboWO',
    'order_id' => rand(),
    'payer_cpf_cnpj'=>$_POST['payer_cpf_cnpj'],
    'payer_email' => $_POST['payer_email'],
    'payer_name' => $_POST['payer_name'], // nome completo ou razao social
    'payer_phone' => $_POST['payer_phone'], // fixou ou móvel
    'notification_url' => 'https://mysite.com/notification/paghiper/',
    
    'fixed_description' => true,
    'days_due_date' => '5', // dias para vencimento do Pix
    'items' => array(
        array ('description' => 'Lorem ipsu',
        'quantity' => '1',
        'item_id' => $id,
        'price_cents' => "20000"), // em centavos
  ),
  );
  $data_post = json_encode( $data );
  $url = "https://pix.paghiper.com/invoice/create/";
  $mediaType = "application/json"; // formato da requisição
  $charSet = "UTF-8";
  $headers = array();
  $headers[] = "Accept: ".$mediaType;
  $headers[] = "Accept-Charset: ".$charSet;
  $headers[] = "Accept-Encoding: ".$mediaType;
  $headers[] = "Content-Type: ".$mediaType.";charset=".$charSet;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data_post);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  $json = json_decode($result, true);
  // captura o http code
  $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  if($httpCode == 201):
  // CÓDIGO 201 SIGNIFICA QUE O PIX FOI GERADO COM SUCESSO
  $result = json_decode($result);
  
  if(isset($_POST['enviar'])){

      $sql = $conn->prepare("INSERT INTO  orders ( iduser, product, value, status) VALUES(:iduser) ");
  }
  echo'<pre>';
   print_r($result);
  echo '</pre>';
  
   echo '<h1>'.$result->pix_create_request->status.'</h1> <br>';
  
   echo $result->pix_create_request->pix_code->qrcode_base64.'<br>';
   echo $result->pix_create_request->pix_code->qrcode_image_url.'<br>';
   echo $result->pix_create_request->pix_code->emv;
  //Exemplo de como capturar a resposta json

 
  
  else:
  echo $result;
  endif;

?>