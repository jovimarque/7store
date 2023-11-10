<?php
require_once("../class/Conn.class.php");
require_once("verificador.php");
if(isset($_SESSION['logado']) == 'SIM'){

    echo '<h1 style="color:white;">Seja bem vindo usuario: '.$_SESSION['usuario'].' </h1><br>';
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setes</title>
    <link rel="stylesheet" href="../css/checkout.css">
</head>
<body>



    <?php

        $sql = $conn->prepare("SELECT * FROM users WHERE  nivel = :NIVEL");
        $sql->bindValue(":NIVEL", $_SESSION['acesso']);
        $sql->execute();
        $stmt = $sql->fetchAll();

    foreach ($stmt as $usuario) {
        
        if ($usuario['nivel'] == 2){
           
             echo "<h1>Como deseja pagar?</h1><p>Escolha sua forma de pagamento abaixo.</p> <div class='me-container'><div class='me'><div class='pagamento'><h1>Como deseja pagar?</h1><div class='meth-buy'><img src='https://img.icons8.com/ios-glyphs/30/000000/us-dollar-circled--v1.png'/><a href='#'></a></a></div></div></div></div>";
    
        }else{

            echo "<h1 style='color:white;'>Olá administrador ".$_SESSION['usuario'].'</h1>';

        }
    }

    ?>

</body>
</html>




                






                    









 





   

    

   
