<?php

require_once("../class/Conn.class.php");
require_once("../pages/verificador.php");

//$email = $_SESSION['usuario'];;

$query = $conn->prepare("SELECT * FROM `stars` ");

//$query->bindValue(":id", $id);
$query->execute();

$row = $query->fetchAll();

foreach ($row as $star): 

$id = $star['id'];
$amount_star = $star['amount_star'];
$created = $star['created'];
$comment = $star['comment'];
$idUser = $star['idUser'];

endforeach;

/*

$query = $conn->prepare("SELECT * FROM `stars` WHERE id= :id");
$query->bindValue(":id", $id);
$query->execute();

$row = $query->fetchAll();

foreach ($row as $star_2): 

$amount_star = $star_2['amount_star'];
$created = $star_2['created'];
$comment = $star_2['comment'];
$idUser = $star_2['idUser'];

endforeach;

*/

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/feedback.css">
    <link rel="stylesheet" href="../css/clienteFeedback.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

</head>

<body>

    <div class="aaaaaa">
        <div class="header">
            <a href="#default" class="logo">777Store</a>
            <div class="header-right">

                <a href="index.php">Inicio</a>
                <a href="home.php">Produtos</a>
                <a href="#duvidas">Duvidas</a>
                <a class="active" href="feedback.php">Feedback</a>
                <a href="login.php">Area cliente</a>

            </div>
        </div>
    </div>

    <div class="container">

        <div class="cards-container">

            <div class="card-content">
                <h2>Cleiton</h1>
                    <div class="stars">
                        <!--
                        <type="radio" id="vazio" name="star" value="" checked>

                            <label for="star-um"> <i class="fa"></i> </label>
                            <id="star-um" name="star" value="1">

                                <label for="star-dois"> <i class="fa"></i> </label>
                                <type="radio" id="star-dois" name="star" value="2">

                                    <label for="star-tres"> <i class="fa"></i> </label>
                                    <type="radio" id="star-tres" name="star"
                                        value="3">

                                        <label for="star-quatro"> <i class="fa"></i> </label>
                                        <type="radio" id="star-quatro" name="star"
                                            value="4">

                                            <label for="star-cinco"> <i class="fa"></i> </label>
                                            <type="radio" id="star-cinco" name="star"
                                                value="5">
-->

                    </div>
                    <p><?php echo $star['comment']; ?> </p>
                    <p><?php echo $star['created']; ?></p>
            </div>



        </div>

    </div>

</body>

</html>