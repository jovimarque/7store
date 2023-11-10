<?php

require_once("../class/Conn.class.php");
require_once("../pages/verificador.php");
//require_once("../pages/testeComprar.php");

$email = $_SESSION['usuario'];;

$query = $conn->prepare("SELECT * FROM `users` WHERE email= :email");
$query->bindValue(":email", $email);
$query->execute();

$row = $query->fetchAll();

  foreach ($row as $users): 

$idUser = $users['id'];

endforeach;




if(isset($_SESSION['logado']) == 'SIM'){

    if(isset($_POST['star']) && isset($_POST['star_comment'])){

        $star = $_POST['star'];
        $star_comment = $_POST['star_comment'];

        $query = $conn->prepare("INSERT INTO stars (amount_star, created, comment, idUser) VALUES ('$star', NOW(), '$star_comment', '$idUser')");
        $query->execute();

    } else {

    }

} else {

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/clienteFeedback.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>

<body>

    <div class="aaaaaa">
        <div class="header">
            <a href="#default" class="logo">777Store</a>
            <div class="header-right">

                <a href="../pages/index.php">Inicio</a>
                <a href="areaCliente.php">Historico</a>
                <a class="active" href="feedback.php">Feedback</a>
                <a href="#about">Sair</a>

            </div>
        </div>
    </div>

    <?php

if(isset($_SESSION['logado']) == 'SIM'){ ?>

    <div class="bem-vindo">

        <h1>Seja bem vindo a area de cliente <span style="color: #8000FF;">
                <?php echo $_SESSION['usuario']; ?>!
            </span></h1>

    </div>
    
    <?php

}else{
  header("Location:../pages/login.php");
}

?>

    <div class="title-c">

        <div class="title-c-textos">
            <h1>Avaliação </h1>
            <p>A sua avaliação sobre nosso sistema de compras é super importante para a plataforma!</p>
        </div>

        <div class="card-a">
            <div class="container">

            <h1>Prezamos a qualidade e a satisfação do cliente acima de tudo.</h1>

            <form action="clienteFeedback.php" method="POST">
            <div class="stars">
                <input type="radio" id="vazio" name="star" value="" checked>

                <label for="star-um"> <i class="fa"></i> </label>
                <input type="radio" id="star-um" name="star" value="1">

                <label for="star-dois"> <i class="fa"></i> </label>
                <input type="radio" id="star-dois" name="star" value="2">

                <label for="star-tres"> <i class="fa"></i> </label>
                <input type="radio" id="star-tres" name="star" value="3">

                <label for="star-quatro"> <i class="fa"></i> </label>
                <input type="radio" id="star-quatro" name="star" value="4">

                <label for="star-cinco"> <i class="fa"></i> </label>
                <input type="radio" id="star-cinco" name="star" value="5">

                <input type="text" name = "star_comment" placeholder="Comentário">

                <input class="product-btn" type="submit" value="Enviar">

            </div>
            </form>
            </div>
        </div>
    </div>

</body>

</html>