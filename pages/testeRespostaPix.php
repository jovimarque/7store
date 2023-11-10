<?php
require_once('vendor/autoload.php');
require "../class/Conn.class.php";




$client = new  \GuzzleHttp\Client();
//API  com as chaves do pagHiper para requisição HTTP
$response = $client->request('POST', 'https://pix.paghiper.com/invoice/status/', [
  'body' => '{"apiKey":"apk_45530098-CfALiYFsvZzKBwIHjadNVxdtNqdatwRl","token":"6GSR42B7MXY5FFVSUM10KGXEZ7B1HPCJEZYMLY24UCKJ","transaction_id":"09A48FBJR20BTK22"}',
  'headers' => [
    'accept' => 'application/json',
    'content-type' => 'application/json',
  ],
]);



 
//echo $response->getBody();
//transforma o json em objeto PHP
$resposta = json_decode($response->getBody());
//acessa as informações do objeto
echo '<pre>';
print_r($resposta);
echo '</pre>';
echo'Status do pagamento: '.$resposta->status_request->status.'<br>';
 echo' Data de transação: '.$resposta->status_request->due_date.'<br>';
 echo' Valor em centavos ' .$resposta->status_request->value_cents.'<br>';
 echo' Valor em centavos ' .$resposta->status_request->order_id.'<br>';


 	// manda informações do status do pix para o banco de dados

 			$status = $resposta->status_request->status;
 			$idtransacao = $resposta->status_request->order_id;
			$sql = $conn->prepare("INSERT INTO  `statuspixresponse` (status,idtransacao)  VALUES(:status, :idtransacao)");
			$sql->bindParam(":status", $status);
			$sql->bindParam(":idtransacao", $idtransacao);
			$sql->execute();


			
			


?>





