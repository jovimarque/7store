<?php
require_once('../class/Conn.class.php');
    $idProduct = $_GET['id'];

        // SDK do Mercado Pago
require __DIR__ .  './mp/vendor/autoload.php';
// Adicione as credenciais
MercadoPago\SDK::setAccessToken('TEST-5439227793837533-112220-487a1531b537fcefba47a53520b00ffd-1245784499');
   
 // Cria um objeto de preferência
$preference = new MercadoPago\Preference();

// Cria um item na preferência
$item = new MercadoPago\Item();


    $query = $conn->prepare("SELECT * FROM `products` WHERE id= :id");
    $query->bindValue("id", $idProduct);
    $query->execute();
    $listProducts = $query->fetchAll();

    foreach($listProducts as $products) {
        $productName = $products['name'];
        $productPrice = $products['value'];

        $item->title = $productName;
        $item->quantity = 1;
        $item->unit_price = $productPrice;
        $preference->items = array($item);
        $preference->save();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
</head>

<body>
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
    <div class="cho-container"></div>
</body>

</html>