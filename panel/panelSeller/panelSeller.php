<?php


require_once("../../class/Conn.class.php");
require_once("../../pages/verificador.php");
	$sql = $conn->prepare("SELECT * FROM users");
	$sql->execute();
	$row = $sql->fetch();
	echo $row['id'];



if(isset($_POST['idseller']) && isset($_POST['name']) && isset($_POST['value'])) {

    if(isset($_POST['prodLogin']) && isset($_POST['prodPass'])) {
    
        $idsaller = $_POST['idseller'];
        $name = $_POST['name'];
        $value = $_POST['value'];
        $prodLogin = $_POST['prodLogin'];
        $prodPass = $_POST['prodPass'];
        
      $query = $conn->prepare("INSERT INTO `products` (idseller, name, value, prodLogin, prodPass) VALUES (:idseller, :name, :value, :prodLogin, :prodPass)");

      $query->bindValue(':idseller', $idsaller);
      $query->bindValue(':name', $name);
      $query->bindValue(':value', $value);
      $query->bindValue(':prodLogin', $prodLogin);
      $query->bindValue(':prodPass', $prodPass);

      $execute = $query->execute();
    }


}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/a.css">
</head>

<body>


    <div class="container-all">
        <div class="aaaaaa">
            <div class="header">
                <a href="#default" class="logo">777Store</a>
                <div class="header-right">

                    <a href="../pages/index.php">Inicio</a>
                    <a class="active" href="panelSeller.php">Add pro</a>
                    <a href="#contact">Produtos</a>
                    <a href="#contact">Historico de vendas</a>
                    <a href="#about">Sair</a>

                </div>
            </div>
        </div>
    </div>

    <div class="container-all">
        <div class="bem-vindo">
            <h1>Seja bem vindo ao painel do vendedor <span
                    style="color: #8000FF;"><?php echo $_SESSION['usuario'];?></span>
            </h1>
        </div>
    </div>

    <div class="container-all">
        <div class="titulo">

            <h1>Adicione produtos</h1>
            <p>Lorem ipsum dolor sit amet. Sed dolor deserunt ut nihil voluptatibus non molestias minimas</p>

        </div>
    </div>

    <div class="container-all">


        <form action="panelSeller.php" method="POST">
            <div class="container">
                <div class="content">
                    <div class="right">
                        <h1>Produto</h1>
                        <input type="hidden" name="idseller" value="<?php echo $row['id']; ?>">
                        <input type="text" name="name" placeholder="Nome">
                        <input type="text" name="value" placeholder="Valor">
                        <input type="text" name="img" placeholder="Imagem">
                    </div>
                    <div class="right">
                        <h1>Informacoes de login</h1>
                        <input type="text" name="prodLogin" placeholder="Login">
                        <input type="text" name="prodPass" placeholder="Senha">
                        <input type="submit" placeholder="Adicionar">
                    </div>
                </div>
            </div>
        </form>


    </div>


</body>

</html>