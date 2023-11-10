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
    <link rel="stylesheet" href="../../css/editproduct.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="script.js"></script>
</head>

<body>

    <div class="cont-big-nig">



        <div class="container-sec">


            <div class="topnav">

                <div class="a">
                    <a class="active" href="#home"><img src="../../img/7slogo-semfundo.png" alt=""></a>
                </div>

                <div class="b">
                    <a href="#news">Principal</a>
                    <a href="#contact" class="nada">Produtos</a>
                    <a href="#contact" class="nada">Feedbacks</a>
                    <a href="#about" class="nada">Contato</a>
                    <a href="#contact" class="nada">Sobre nos</a>
                    <a href="#about" class="nada">Area cliente</a>
                </div>

                <div id="myNav" class="overlay">


                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAA10lEQVRIie2W3Q2CUAyFiztIcAe3YG4mwCcxYQeX+HxpIiEX6JEmJspJeKE9fLfl/pkd+ksBNXDzp97h78N+4AzceWsELgL0M7+PdK4hMnKvdCj4+3nuKVjI1cy6NbjHOs/VVWjVVMW2BTxNOjwNqsDToRP40mTB36/F5GWoVJ5b6Q54HlSAS9DoOo6qSv2a2Orw9poFzYPzjeW0UekINIEcrfIIVMiNwRVoKpzyeQwb/431+fDxefwws7aqqudSgsdaz9VVaJu0I+3ye9t6lMtaov/Qb+gFR+sH5aRmFKEAAAAASUVORK5CYII=">
                    </a>

                    <div class="overlay-b">

                        <a href="#news" class="split">Principal</a>
                        <a href="#contact" class="nada">Produtos</a>
                        <a href="#contact" class="nada">Feedbacks</a>
                        <a href="#about" class="nada">Contato</a>
                        <a href="#contact" class="nada">Sobre nos</a>
                        <a href="#about" class="nada">Area cliente</a>
                    </div>
                </div>

                <button class="nav-button" onclick="openNav()">
                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAL0lEQVRIiWNgGAUjB/z////wf+qBwzBzmWjlXhqZOwooAaOpaBRQDkZT0SgYvAAAlsLwrAZxxMIAAAAASUVORK5CYII=">


                </button>

            </div>
        </div>

        <div class="container">

            <div class="banner-novidades-content">
                <div class="banner-novidades-content-text-left">

                    <div class="banner-novidades-content-text-left-content">

                        <h1>SEJA BEM VINDO A AREA DO VENDEDOR <span><?php echo $_SESSION['usuario'];?>!</span></h1>

                    </div>

                    <div class="menu-vertical">
                    <div class="menu-vertical-content">
                            <a href="addproduct.php">Adicionar</a>
                            <a href="historicovendas.php" class="split"> Historico de vendas</a>
                            <a href="product.php">Produtos</a>
                            <a href="../../system/exit.php"> Sair </a>
                        </div>
                    </div>

                </div>
                <div class="banner-novidades-content-infos">

                    <div class="banner-novidades-content-infos-cards">
                        <h1>Produtos vendidos</h1>
                        <p>10</p>
                    </div>

                    <div class="banner-novidades-content-infos-cards">
                        <h1>Quantidade de produtos</h1>
                        <p>6</p>
                    </div>

                    <div class="banner-novidades-content-infos-cards">
                        <h1>Estoque de produtos</h1>
                        <p>23</p>
                    </div>

                </div>

                <div class="banner3">
                    <form action="addproduct.php" method="POST">
                        <div class="banner3-content">
                            <div class="banner3-content-cards">

                                <div class="banner3-content-cards-content">

                                    <input type="hidden" name="idseller" value="<?php echo $row['id']; ?>">

                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAADX0lEQVRoge2YP0wUQRTGBwhgEFQQiFAZEoyJnYYOY2JsLa0IBBtjQmElVhpiZWlrcRaWUlKi/BEJBokFGCmIvRg1QaNHNPCz2Lfh3dzuMrN7B0u4L7nkdnbme++befPm7RhTwzEC0A28Bd4D3YftTyoAXcAqe1gHeg7bLy9EiDh6YiSc1sTxNSVCt+U7zKyVWAfOKSH2u3yuTJQIaQcgpk/+xEhmKgsdLUSedegtH463CQCWgBU7/m0h0tYtfZcO1ssMiBJSDdRX28BBoSYkb/ASAvQBE8BnYKbSzgAzwj0B9FWavBUYBeaAXXXAOQnx2ezArOLfFZujQGsWAVeAZ8AvRV4EXgI3gYYqCKkHBhPs3gDqXAU0A8vWzMwDt4E2J5KUQqxxbWJz3oqEZaDJ7h+1Rx4YYwbUc50x5qQx5pQxptnXoQyoN8bsGGP+Wu0DJvAxHkC/LOMuMAY8B7bUbGwDkxJajS7eAAvAG8e+jcI9KbZCbIkvY+JbEehPIpqWgQXVdgK4BUwB/xT5d4nlQRcn9xFwCXgCfFH8OwRfl3dQmx0oyPu5yP0CjEiHb0BXjMEe4B7wgVJ8IkiZ5z2cT8UFdACb0nc46eWIoyPOs6jGxK3uD5/VtSa9U78Il+t15HIlkybFdQG4Jr8CGfebslkHvBKeQth4lWADbQMXfQgjDJyW2ZqmNGVqrBCEVOf+jIm2dGK6btj7YntHUiZIZ2hJCagm/6ohiGmNReAu0F4BQ0XFWwQuZORsF98WLZ8Xwg5hOWLH8BTB5vSKYeGcphzRKTOZp4GgNHkB/FZcf4grW4AWYCjCgU3gKXDZ0fiwjPuqOML/rlnxstjcpBxDQIsLSYhx4KNFsgbcB3pjxnYop4fVOC3ubMzYXuHW92GID+Phg8tElAhRz6lPXs2FX+VQdrZkFqLa486Mn8TUQpaQTLVcxYRYfc4Qf2Y8jOMCHlGO8GyJLI2qKsTq3w88BjYIvvKa1DtbSJP02ZAxzmdL1YXkget43qLkGTUheUOiEN+sUi2EWTHNwDkrz6euiNNmLeIr3VlfoopUxD5CSFPpegjK9J3tIoQU3/+ZQIqbjzghBJVuRW5ksopymkUtJOvqVlvQfreDITLfWh4Y8LtFSax0cwNKK2LvSreGo47/0Qk4C1XRCYoAAAAASUVORK5CYII=">
                                    <h2>Informacoes do produto</h2>

                                    <p>Nome</p>
                                    <input type="text" name="name" placeholder="Nome">

                                    <p>Descrição</p>
                                    <input type="text">

                                    <p>Preço</p>
                                    <input type="text" name="value" placeholder="Valor">

                                </div>

                            </div>
                            <div class="banner3-content-cards">

                                <div class="banner3-content-cards-content">

                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAADX0lEQVRoge2YP0wUQRTGBwhgEFQQiFAZEoyJnYYOY2JsLa0IBBtjQmElVhpiZWlrcRaWUlKi/BEJBokFGCmIvRg1QaNHNPCz2Lfh3dzuMrN7B0u4L7nkdnbme++befPm7RhTwzEC0A28Bd4D3YftTyoAXcAqe1gHeg7bLy9EiDh6YiSc1sTxNSVCt+U7zKyVWAfOKSH2u3yuTJQIaQcgpk/+xEhmKgsdLUSedegtH463CQCWgBU7/m0h0tYtfZcO1ssMiBJSDdRX28BBoSYkb/ASAvQBE8BnYKbSzgAzwj0B9FWavBUYBeaAXXXAOQnx2ezArOLfFZujQGsWAVeAZ8AvRV4EXgI3gYYqCKkHBhPs3gDqXAU0A8vWzMwDt4E2J5KUQqxxbWJz3oqEZaDJ7h+1Rx4YYwbUc50x5qQx5pQxptnXoQyoN8bsGGP+Wu0DJvAxHkC/LOMuMAY8B7bUbGwDkxJajS7eAAvAG8e+jcI9KbZCbIkvY+JbEehPIpqWgQXVdgK4BUwB/xT5d4nlQRcn9xFwCXgCfFH8OwRfl3dQmx0oyPu5yP0CjEiHb0BXjMEe4B7wgVJ8IkiZ5z2cT8UFdACb0nc46eWIoyPOs6jGxK3uD5/VtSa9U78Il+t15HIlkybFdQG4Jr8CGfebslkHvBKeQth4lWADbQMXfQgjDJyW2ZqmNGVqrBCEVOf+jIm2dGK6btj7YntHUiZIZ2hJCagm/6ohiGmNReAu0F4BQ0XFWwQuZORsF98WLZ8Xwg5hOWLH8BTB5vSKYeGcphzRKTOZp4GgNHkB/FZcf4grW4AWYCjCgU3gKXDZ0fiwjPuqOML/rlnxstjcpBxDQIsLSYhx4KNFsgbcB3pjxnYop4fVOC3ubMzYXuHW92GID+Phg8tElAhRz6lPXs2FX+VQdrZkFqLa486Mn8TUQpaQTLVcxYRYfc4Qf2Y8jOMCHlGO8GyJLI2qKsTq3w88BjYIvvKa1DtbSJP02ZAxzmdL1YXkget43qLkGTUheUOiEN+sUi2EWTHNwDkrz6euiNNmLeIr3VlfoopUxD5CSFPpegjK9J3tIoQU3/+ZQIqbjzghBJVuRW5ksopymkUtJOvqVlvQfreDITLfWh4Y8LtFSax0cwNKK2LvSreGo47/0Qk4C1XRCYoAAAAASUVORK5CYII=">
                                    <h2>Informacoes de login do produto</h2>

                                    <p>Nome</p>
                                    <input type="text" name="prodLogin" placeholder="Login">

                                    <p>Senha</p>
                                    <input type="text" name="prodPass" placeholder="Senha">

                                    <p>Email (opcional)</p>
                                    <input type="text">

                                    <p>Senha do email (opcional)</p>
                                    <input type="text">

                                    <a class="text-left-start-btn" href="">CADASTRAR PRODUTO</a>

                                </div>

                            </div>
                        </div>
                        </form>
                </div>


            </div>
        </div>





        <div class="container-color">
            <div class="container-sec">

                <div class="banner6-content">

                    <div class="banner6-footer-content-cards">

                        <h2>Formas de pagamento</h2>
                        <img src="../../img/mercado-pago.png" alt="">

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


    </div>
</body>

</html>