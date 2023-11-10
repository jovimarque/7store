<?php
require_once('../class/Conn.class.php');
require_once('verificador.php');



// -------------- Paghiper -------------- \\

$id = $_GET['id'];

//Pega o id da tabela de usuário para cadastrar o id do cliente na tabela orders
$email = $_SESSION['usuario'];

$querya = $conn->prepare("SELECT * FROM `users` WHERE email= :email");
$querya->bindValue(":email", $email);
$querya->execute();

$resultquerya = $querya->fetchAll();


foreach ($resultquerya as $bah): 

    
    
    //echo $bah['id'];

    $idcustomer = $bah['id'];
    
        endforeach; 


// -------------- Product --------------
//pega as informações da tabela produto para preenchimento de informações do pix e também  pega a informação do id do vendedor
    $query = $conn->prepare("SELECT * FROM `products` WHERE id= :id");
    $query->bindValue(":id", $id);
    $query->execute();
    $resultado_query = $query->fetch();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setes</title>
    <link rel="stylesheet" href="../css/buy.css">
    <script src="https://sdk.mercadopago.com/js/v2"></script>
</head>

<body>

    <div class="container-sec">


        <div class="topnav">

            <div class="a">
                <a class="nada" href="#home"><img src="../img/7slogo-semfundo.png" alt=""></a>
            </div>

            <div class="b">
                <a href="index.php" class="nada">Principal</a>
                <a href="home.php" class="split">Produtos</a>
                <a href="#about" class="nada">Contato</a>
                <a href="login.php" class="nada">Area cliente</a>
            </div>

            <div id="myNav" class="overlay">


                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAA10lEQVRIie2W3Q2CUAyFiztIcAe3YG4mwCcxYQeX+HxpIiEX6JEmJspJeKE9fLfl/pkd+ksBNXDzp97h78N+4AzceWsELgL0M7+PdK4hMnKvdCj4+3nuKVjI1cy6NbjHOs/VVWjVVMW2BTxNOjwNqsDToRP40mTB36/F5GWoVJ5b6Q54HlSAS9DoOo6qSv2a2Orw9poFzYPzjeW0UekINIEcrfIIVMiNwRVoKpzyeQwb/431+fDxefwws7aqqudSgsdaz9VVaJu0I+3ye9t6lMtaov/Qb+gFR+sH5aRmFKEAAAAASUVORK5CYII=">
                </a>

                <div class="overlay-b">

                    <a href="#news" class="nada">Principal</a>
                    <a href="#contact" class="split">Produtos</a>
                    <a href="#about" class="nada">Contato</a>
                    <a href="#about" class="nada">Area cliente</a>
                </div>
            </div>

            <button class="nav-button" onclick="openNav()">
                <img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAL0lEQVRIiWNgGAUjB/z////wf+qBwzBzmWjlXhqZOwooAaOpaBRQDkZT0SgYvAAAlsLwrAZxxMIAAAAASUVORK5CYII=">


            </button>

        </div>
    </div>

    <?php 


$dt = new DateTime();

# A função setlocale, Define informações locais, idioma e gramática
  setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

#strftime, formata uma hora/data local de acordo com a configuração do idioma. Nome do mês e dia da semana e outras strings respeitam o idioma corrente definido com a função 
 $str=strftime("%A");

 $timeLocal = date("d/m/Y");



//pega informações da tabela de usuário para preenchimento do formulário
    $email = $_SESSION['usuario'];
    $query = $conn->prepare("SELECT * FROM `users` WHERE email= :email");
    $query->bindValue(":email", $email);
    $query->execute();
        
foreach ($query as $user): 

?>

    <div class="container">

        <form method="POST">
            <div class="card">

                <div class="card-cart">

                    <div class="card-cart-content">
                        <h1>Produto</h1>
                        <p>aaaaaaaaaaaaaaa</p>
                    </div>

                </div>

                <div class="card-details">

                    <!--input type="text" name="idtransacao" value="<?php   $result->pix_create_request->order_id;?>"-->
                    <input type="hidden" name="id_transacao" value="<?php echo  rand(); ?>">

                    <div class="card-details-items">
                        <h3>Nome</h3>
                        <input type="text" name=" nome" value="<?php echo $user['name'];?>">
                    </div>

                    <div class="card-details-items">
                        <h3>Telefone</h3>
                        <input type="text" name="telefone" value="432423342">
                    </div>

                    <div class="card-details-items">
                        <h3>Cpf</h3>
                        <input type="text" name="cpf" value="698.001.300-98">
                    </div>

                    <div class="card-details-items">
                        <h3>Endereco de email</h3>
                        <input type="text" name="email" value="<?php echo $user['email'];?>">
                    </div>

                    <input type="hidden" name="data_compra"
                        value="<?php echo strftime('%A, %d de %B de %Y', strtotime('today')); ?>">

                    <div class="card-cart-meth">

                        <h3>Metodos de pagamento</h3>

                        <div class="card-cart-meth-items">

                            <!-- <p>Mercado Pago</p> -->
                            <input type="radio" name="buymp">
                            <img src="../img/mercado-pago.png" alt="">

                        </div>
                        <div class="card-cart-meth-items">

                            <!-- <p>Outros</p> -->
                            <input type="radio" name="buyothers">
                            <img src="../img/pixlogo.png" alt="">

                        </div>
                    </div>

                    <input type="submit" name="pagamento">
                    <input type="submit" name="mp"> mp

                </div>
        </form>
        <div class="cho-container"></div>

        <?php endforeach; ?>

    </div>
    </div>
    <?php

  
    //pega as informações da tabela produto para preenchimento de informações do pix
    $query = $conn->prepare("SELECT * FROM `products` WHERE id= :id");
    $query->bindValue(":id", $id);
    $query->execute();

    $row = $query->fetchAll();

      foreach ($row as $product){

    $nameproduct = $product['name'];
    $valor = $product['value'];
    $cents = "00";

    $valorend = $valor. $cents;


   }

   ///pagamento
if(isset($_POST['pagamento'])){

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $id_transacao = $_POST['id_transacao']; 
    $data_compra = $_POST['data_compra'];
    
    

    /*

     INICIO DO CODIGO DA PAGHIPER

    */

$data = array(
    'apiKey' =>'apk_45530098-CfALiYFsvZzKBwIHjadNVxdtNqdatwRl',
    'order_id' =>$id_transacao,
    'payer_cpf_cnpj'=>$cpf,
    'payer_email' => $email,
    'payer_name' => $nome, // nome completo ou razao social
    'payer_phone' => $telefone, // fixou ou móvel
    'notification_url' => 'https://mysite.com/notification/paghiper/',
    
    'fixed_description' => true,
    'days_due_date' => '5', // dias para vencimento do Pix
    'items' => array(
        array ('description' => $nome,
        'quantity' => '1',
        'item_id' => $id,
        'price_cents' =>  "20000"), // em centavos
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
 	

	//echo $data['items'][0]['description'].'<br>';
    if($httpCode == 201):
        $result = json_decode($result);
        // CÓDIGO 201 SIGNIFICA QUE O PIX FOI GERADO COM SUCESSO
        
        // Exemplo de como capturar a resposta json
        
        
        //$codigoPix =  $result->pix_create_request->pix_code->qrcode_base64.'<br>';
        //echo $result->pix_create_request->pix_code->qrcode_image_url.'<br>';
        $codigoPix = $result->pix_create_request->pix_code->emv;

        $qrcode =  $result->pix_create_request->pix_code->qrcode_image_url;

        $status_pix =$result->pix_create_request->status;
        
        /*
        Ativa a  função print_r para visualizar  o codigo json com as informações do pix
        
        echo'<pre>';
        print_r($result);
        echo '</pre>';
        */
        

         //insere a ordem  de pagamento no banco de dados

        
        else:
        echo $result;
        endif;

    /*

     FIM DO CODIGO DA PAGHIPER

    */

            
           
                    //insere a ordem  de pagamento no banco de dados
                   
                    $id_user =  $_SESSION['usuario']; 
                    $nameproduct = $nameproduct;
                    $produto = $id;
                    $valor_produto = $valor;
                    $id_vendedor =  $resultado_query['idSeller'];
                    $status_pagamento = $status_pix;
   $sql = $conn->prepare("INSERT INTO `orders` (idSeller,idcustomer,idproduct,nameproduct,value,status ) VALUES(:idSeller,:idcustomer,:produto,:nameproduct,:valor,:status)");
                //    $sql->bindValue(":compra", $data_compra);
                    $sql->bindValue(":status", $status_pagamento);
                    $sql->bindValue(":produto", $produto);
                    $sql->bindValue(":valor", $valor_produto);
                    $sql->bindValue(":nameproduct", $nameproduct);
                    $sql->bindValue(":idSeller", $id_vendedor);
                    $sql->bindValue(":idcustomer", $idcustomer);
                  
                    $sql->execute();
               
       }
     
//verifica se o status do pix for igual a  true, irá exibir os dados do pix e QRCODE
/*
 if($result == true){
}
*/


?>

    <!-- <h3 style="width:15%; color:white; margin:0px auto;"> Codigo Pix: <?php/* echo $codigoPix;*/?> </h3> -->

    <img style="margin-left:1000px;" src=" <?php echo $qrcode;?>" alt="">

    <?php
    /*
  }else{
  	// aqui mostra  mensagem que o  sistema está aguardando o pagamento
    echo"<h4 style=' color:white; text-align:center;'>Aguardando Pagamento</h4>";  
  }
  */








// -------------- Mercado pago -------------- \\

// SDK do Mercado Pago
require __DIR__ .  './mp/vendor/autoload.php';
// Adicione as credenciais
MercadoPago\SDK::setAccessToken('TEST-5439227793837533-112220-487a1531b537fcefba47a53520b00ffd-1245784499');

   ///pagamento

//    if(isset($_POST['mp'])){

    // $nome = $_POST['nome'];
    // $cpf = $_POST['cpf'];
    // $email = $_POST['email'];
    // $telefone = $_POST['telefone'];
    // $id_transacao = $_POST['id_transacao']; 
    // $data_compra = $_POST['data_compra'];
   
 // Cria um objeto de preferência
$preference = new MercadoPago\Preference();

// Cria um item na preferência
$item = new MercadoPago\Item();
$item->title = 'Meu produto';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();

                        //insere a ordem  de pagamento no banco de dados
                   
                        // $id_user =  $_SESSION['usuario']; 
                        // $nameproduct = $nameproduct;
                        // $produto = $id;
                        // $valor_produto = $valor;
                        // $id_vendedor =  $resultado_query['idSeller'];
                        // // $status_pagamento = $status_pix;
                        // $sql = $conn->prepare("INSERT INTO `orders` (idSeller,idcustomer,idproduct,nameproduct,value ) VALUES(:idSeller,:idcustomer,:produto,:nameproduct,:valor)");
                        // //$sql->bindValue(":compra", $data_compra);
                        // // $sql->bindValue(":status", $status_pagamento);
                        // $sql->bindValue(":produto", $produto);
                        // $sql->bindValue(":valor", $valor_produto);
                        // $sql->bindValue(":nameproduct", $nameproduct);
                        // $sql->bindValue(":idSeller", $id_vendedor);
                        // $sql->bindValue(":idcustomer", $idcustomer);
                      
                        // $sql->execute();
                   
        //    }

    // class PagamentoMP {
    //     // vamos dar alguns atributos a esta class 
    //     // como : 
         
    //     // O botão que irá retornar da função PagarMP (string) 
    //     public $btn_mp;
          
    //     // Definiremos o botão que irá retornar, se será uma lightbox 
    //     // do mercado pago ou não, como padrão será false. o user será  
    //     // redirecionado para o site do mercado pago 
    //     private$lightbox= true; 
         
    //     // Esta variável recebe uma array com os dados da transação 
    //     public $info = array(); 
         
    //     // Se for em modo de teste, esta variável recebe true, caso  
    //     // contrário o sistema estará em modo de produção 
    //     private $sandbox = true; 
         
    //     // Suas credenciais do mercado pago 
    //     private $client_id = "TEST-6880991474876885-101006-efcf9e3ccfe5ff0049a7a8834a29271f-534257842"; 
    //     private $client_secret = "TEST-6880991474876885-101006-efcf9e3ccfe5ff0049a7a8834a29271f-534257842"; 
         
    //     public function PagarMP($ref,  $nome,$valor,$url){ 
    //         // iniciando as credenciais do MP 
    //         // Os valores de client_id e client_secret são informados 
    //         // como atributos da classe 
    //         $m= new MP($this->client_id, $this->client_secret); 
    //         } 
         
    //         public function Retorno($id , $conn){ 
    //             // iniciando as credenciais do MP 
    //             $mp = new MP​($this->client_id, $this->client_secret); 
    //             /* Código... */ 
    //             }
    // }

?>

    <div class="cho-container"></div>
    <script>
    const mp = new MercadoPago(
        'TEST-f9e697e4-d4b5-46bc-a99c-d5d00fd53e07', {
            locale: 'pt-BR'
        });

    mp.checkout({
        preference: {
            id: '<?php echo $preference->id ?>'
        },
        render: {
            container: '.cho-container',
            label: 'Pagar',
        }
    });
    </script>

    <div class="container-color">
        <div class="container-sec">

            <div class="banner6-content">

                <div class="banner6-footer-content-cards">

                    <h2>Formas de pagamento</h2>
                    <img src="../img/mercado-pago.png" alt="">

                </div>

                <div class="banner6-footer-content-cards">

                    <h2>Principal</h2>
                    <li><a href="">Contato</a></li>
                    <li><a href="">Sobre nos</a></li>
                    <li><a href="">Feedbacks</a></li>
                    <li><a href="">Qualidades</a></li>

                </div>

                <div class="banner6-footer-content-cards">

                    <h2>Produtos</h2>
                    <li><a href="">Netflix</a></li>
                    <li><a href="">Metodos</a></li>
                    <li><a href="">Prime video</a></li>
                    <li><a href="">Contas steam</a></li>

                </div>

                <div class="banner6-footer-content-cards">

                    <h2>Nos acompanhe</h2>

                    <div class="banner6-footer-content-cards-icons">

                        <li>

                            <a href="#"> <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAACSklEQVRIie3VzYtXVRwG8M8xFSWRFpKYmIK6SUzEFEIXiiD+BUJrW8oYuDMjN4pgLXQVRG7cCJFWouULgmLMQiqhhiLElShiaPkWjtnj4tzBYZz53d+MP6WFDxzuveec+zzft/M9vMT/AUm2JfkvyawkC1OxuRfck1rWT6BgJd5t5k72Qnhyp8VSyq9JrmAVZuEXXE+yFfPwbSnlXJL3MA2H0IdzpZT+Z7IsyRdJjibpT7I3ye4kd5IcSTKYZH6SM0l+blKSJB+28baFmhruFXgb36sh/wkfY0qzNm50I3waryM4r4b4TjPgjYkId8wxlFJuJvkdN0opD5KUkVsmItyNxzDYDLiGGc0Y+g5eeR7Cw/EjlmMHHqn5vopF+BR3uyFpDXWD/bjfvG9vhOZiYynlcpKdqufH1Zq41EY4Zn6SzDTO8I2CR6WU213tTLIkyUB6h4EkS7oR7u+h6BB+GKnzVKiTPPQk9/vU3A1hhyfVDGvxEda3+PNvKWXK8InRqnpkwZ3HwTEIL+JWi+honK3HaavqzZtq8/8OD/Elrjd7/sQB3FTP82F8hr/HZUkHXCilbEpyq3meaua/wQB+w2LsxRz1vH/eC+GxsFk9v3/gBtZgGb7q9FMvhKl38V31tupvxrQXITzYCE3HBuxSu9uYGE+vfq157k8yddj8MZxV87tU7d192NOJbDSP/1EtH8IazMbq1J78Fj7BAnyAd9Ri6muMC/7ClhGcnZHk6+fQuQ534/H7uI11eLXV0s64hzPY9ow8LzFxPAaBfs3T6k1wgAAAAABJRU5ErkJggg==">
                            </a>
                        </li>

                        <li>

                            <a href="https://discord.gg/p5rKaVdSJK"> <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAAElElEQVRoge2YT2wVVRTG7y3FAonRErAU2QmItMGAf2qiJqgbEymmhcSFltJYWXSlQNAN0Rg3bnThH1ZajCFRW0RMTE2kRkMkIWqpNhSKUl1QsUSa2FZSWtOfi/tN3rS9M2/evPd04XxJM517vvOdc++7c/8cYzJkyJAhw38Am9YR2GiMedgYs8UYs9kYs94Yc9oY84i1ljy+1hhzUn5Dxph+Y0yfMeZLa+1g2pwSA1gDvAhcJBoNCXQaYvwvKsat5ejACuAtYCoU8CpwDNgHPAr0qv0U0AMMAmPAtP7GgLOynRK3V777gE+kGWAKeBNYUapObAN+l/gM0AVsB24EmoB3gSsxI5wPo9JokuZ2oFuxAC4DjxXbiQc0mmgk1wPLgVc8yV8COjW6jcAdQDWwWH/VamsU5zAwMk/jCvCyuLcDn6t9Grg/bScqgZ8l9BpggQ7m/vzfAs8BdUUMVj2wF/gupHtVsSzwutp+AirTBNgtgWHgBmB1KFAPcG/a5GNiNoR+BYBaxR7W++40ogNy3qV3C7QCW0vdAU/srUBr6H2XchkoVOhBOV4GFpc80wKhaR58T95vpSLC9xk937HWzpQnveSw1v5tjOnU655ETsASYFy9X1u27AoEsFY5/QksSeLQJIfv/4X8CgLQp9wen2/zTa1mPY+WN61U6NZzZyxLK9Ooel1f/rwKg/YclGP0gRfYLOJILDHHrwT2AxdwZ6Mh3OYWuXGl8Qn52tDqdWcc8YBIhxOKduHHh76BSOPj0XhP/P1xpOMitUaSctxg5x/TAnET0Kx3gJZS+Hg02sQ9Fkf6TaSNCQS/EbdtXvvTaj9ZCh+PRp24l6IIa0QYB6I2yjD/L/FXzmu/Re2TpfDxaFSQ2+dWB+3hhLfo2Wetnc0naIyJvc5G2NP4zIFy69drkPOcjgS7+FA+MeEHPRvntQfv/WYh0vj4cF7PhScP3FUW4EASJdxJOPhwm/Xh7gh9uE+Wwici9vPiv+Ez9si4I6GYBT7Cjw+IXn4L8omIvVM+n/mMwf0j8YUJt7ntBc7jNrdzwLPAolL6eDSCKsyPPuOvMm7w2CqAu0mwmpUKwCLF9P2yG5TrLz7H4C5e67Htke0rYF2Zcg/HWwd8rZjtHnutbH/4nK/LWOOx1ZE740wDbwOrytCBVdIOKjcjeAobQI3s130iZ2Q87ptCuCJdJzAr3hTwMe6oUVVE8suAJxQ3GMxZxVpQnNM0/1S8Mz7BOmBShC5gWUTgTbiVJyiggdtpe3GlmzbgPlxdqgZ346wCVgK34T7Up4BXgRPMrV7OSHtTTKePijtJ1FEKV1UMOjNITMVE0+AgpcNBYqYr8BBuhQs6EV99xK0Uw6EAX6iDC6YPcEicAXFeAI4Ap3H3jVHciE/p/wuyHRF3G7ll/5BHv0qcE6F8hoG7YjsREliKK11OhATGcT97O3AP0KL2axRxm8Td+q5Jq0Xa7Yo1Hoo/AbwELE0TpBp3HBj0zwYAOtJ2IhSnI0b/rHK4udg4QbB6XJ23G+jXCL1PwmNFHm0rrQlpd1FkTTlDhgwZMmT4X+IfT8PKRiLfgzgAAAAASUVORK5CYII=">
                            </a>

                        </li>

                        <li>

                            <a href="#"> <img
                                    src="data:image/png;base64,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">
                            </a>
                        </li>

                    </div>
                </div>
                <div class="banner6-footer-content-cards">

                    <h2>Setes</h2>
                    <p> orem ipsum dolor sit amet. Hic minima necessitatibus ut cumque placeat sed molestiae
                        molestiae ut commodi odit eum explicabo nulla.</p>

                </div>
            </div>
            <div class="banner6-detail">

            </div>

            <div class="banner6-text">
                <h2>Setes™ © Todos os direitos reservados.</h2>
            </div>

        </div>
    </div>

</body>

</html>