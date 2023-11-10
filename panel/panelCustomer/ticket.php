<?php
require_once("../../class/Conn.class.php");
require_once("../../pages/verificador.php");
//pega o id do vendedor
$sql = $conn->prepare("SELECT * FROM users");
$sql->execute();
$idSeller = $sql->fetch();
echo $idSeller['id'];

$idUser = $idSeller['id'];

$sql = $conn->prepare("SELECT * FROM `users` WHERE id= :id");
$sql->bindValue(":id", $idUser);
$sql->execute();
$idUser = $sql->fetch();
$idUser['email'];

$queryTicket = $conn->prepare("SELECT * FROM `ticket`");
       		$queryTicket->execute();

       		$ticket = $queryTicket->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/ticket.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../../pages/script.js"></script>
</head>

<body>

    <div class="cont-big-nig">
        <div class="menu">
            <div class="menu-items">
                <div class="nig">

                    <div class="menu-content-header">
                        <img src="../../img/7slogo-semfundo.png" alt="">
                        <h1>Setes</h1>
                    </div>

                    <div class="menu-content">

                        <div class="menu-content-items">
                            <img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAACLklEQVRoge2Yv2vVUBTHv98k7SYuXQs6CtIKUl2LIOjkJggufYp5ffUt1v9CO7XP15c+W3GR6uTkIFi6F6mKY6k/ujh2Kdg097o0mt4mecl7ybsE72dKzjnkfA/nnnsggMHwf8Mkh1ubk3H2wLLGu93FPQBozDTGA/JHkf6QzmorUdtABRDy3ZFlPxgNAgakB+BGkf68BThZgqJI8KYtxM+A8d8f1J8Xq5CvaMQUoJvMM5B1qPol6dLoReU7YArQTe49ENLvmQ0paqYq3wFTgG76noGy90JWKt8BU4BuSt8DZc9K5TtgCtCN2QO6MQXoJs+PrQ8ApgCcKVXRP/YBfIKUy521Z6+SgnL/mdPEa+n4dz3P81VHVY7Qbeto5GmcoyoFQAIP6/fqF1V7nj2wKwVv2U5AIay3AM6FDgILy6utx0UIDZm9Pzuh5LGEcFwAzWhc5g4QmPdeLH1pd9ufCZ4QK4DrAytWiMtDymtqXOYCfI5uhs/COdyM+gic70dkL9Q8iHQ9JK2Agxy5hnVjCdWQWIAEvkffHf6eDp/pO9NK7Lci1KmoeSBPagJShpjgBiAv/DUILri15s7xy5NorAW8H0zqadxac1LNI8GN0zoTOL4FttNihowQNiZWVlpfo0Y7KXrr49avy5eujpG4Ur623hBY9J63Xqr29Fto5PARgTelqcoK5bpw/Ng9k+l4uDONOyDrACYBnC1SWwr7BLelRLuztrQ+pJwGQ+X4A7zkxHAFrbRiAAAAAElFTkSuQmCC">
                            <a href="historicoCompra.php"> Historico de compras</a>
                        </div>

                        <div class="menu-content-items">
                            <img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABUUlEQVRIie2UvUoDQRCAv7mTgI2FoCBGi2AhCNqrLyCxE7EQxfydaLDIC0hAn0CiSQic72BjYxdQMFxSWyedtRb+7FoJIXfkcuFUIveVs7Pz7ewOCxH/HekNWJmjpGijCsyG5OgoxKrZpdvuoOE6iTYqIUoB4ga62ht0iYF4iNJv5gYR/wpjfglK67Xa9dV9kKJW+nhdkHq/HN+ORYLfiqlM19D24tuxIPXDdD6QWKF8c/7sjaPhchENV1h4iTs/4Gn7ihVihSxvI9oKsd6I0nfsC9uF8ZeJ903Reh/YAMzgAjmr2KXTQOJustmTuKn1FlqngJVB9xmoxbJdfhpa3E0ul18yPtkDUsB0n9SHqn256rUQ+OoAms3Gs9Nq3CUWkhfjsVcHJIaQwPUhybnTenS8agzVsReZTGHSVG87IuwCy8DNzPzUQbFY/AjLETFafAEWu1p2XDGagAAAAABJRU5ErkJggg==">
                            <a href="ticket.php" class="clicked">Suporte</a>
                        </div>

                        <div class="menu-content-items">
                            <img
                                src="data:image/png;base64,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">
                            <a href="#">Configurações</a>
                        </div>

                        <div class="menu-content-items">
                            <img
                                src="data:image/png;base64,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">
                            <a href="../../system/exit.php">Sair</a>
                        </div>

                    </div>
                </div>

                <div class="menu-content-items-info">

                    <div class="menu-content-items-info-user">
                        <img src="../../img/36e0e78e9c51bf5e0d076904534a6e05.jpg" alt="">
                        <h3><?php echo $idUser['name']?></h3>
                    </div>

                    <!-- <div class="menu-content-items-info-7s">



                        <div class="menu-content-items-info-btns">
                            <div class="menu-content-items-info-btn ">
                                <button>
                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAADSUlEQVRoge2YX2iNYRzHv++sWURsbWJDbtyMYW5coN1oMmspJBa7kohErsyl5U/5F7uTC0UohBu5ECkyFmtbuVDUFNucC6LRzj4u3uecvc7e9z3nOTvvot5PrdbveX7f3/f3POc953kfKSYmJiYmxhKgBGgAzgDPgCGg3iK/HvgKvAAuABuBqVF6ThVeCJwFBnH5YAysA0osdKaaBegA+o3WV+AcsDAK42XAJeC3KdYFbAWKgEpgM9AO3DVjn4EEYyRMrMvMOW5yKozGFjOGqXEemFUo8y2eFU8AO4Fy4ADQCSTJnyTwEthvNLd5ag0A2ydqvtFT7BGwCbgBDE/AdBDDRrsZeOiJN4Z5dELMF0vqlbRYUo+kIUk5P6gT5LGkckm1kt5JqnEcJ2mlAOyKYJXzZUeQz7Ad6JFUY9V1dHQ7jrPMb6DIL4j7nf6vmJekWmCN34BvA5J2R2gmX/b4Bcd9hIBpkgYkTY/akSU/JVU6jvPDG/TbgSb9e+YlaZqkDZlBvwY2R+8lb8Z5++sjBEyRNChp9mQ5siQhqcJxnNFUIHMHVsjO/HOTUyqpTtKLiHJSlElaHjgKHLH4cXlDxgkU95j9tsA5mRwOa+CBhVBTgEZzgXMyuRfWQH/W9DEqAzQqCpyTyUdvbpFHpExSVWB3uTMl4pwFQPo59T7ESy2LrrKM55vjx5JxEdyXChve4v9Adhc4x499qXzvDiyyXIVaSU+AOqAUWCnpqcJ3Mp8cP9Jeiz3BeZYikrv1rychJ5O5qX+K/IL/AenFzqWBPkmfIrXjzxdT2490A+mzEPBN0oyAhA4z1qKQt7gCgaSrco/Pvu8Akr47jjNT+nsHToaI7pU0ImmtpDuS7F6wcyMp6bakNXKbCDIvSSd8o8AhYDTk66sXWAHMB9qAV1nmZ2MU927pKFBttPuyzD8YugzAeuBTiEgSuAxUmflzcM8y7cAtY6gf9xJsxPwlTKwTuGnmNgNzjEY1cIXwS7J+oCGnvQRm495bhl1g/QKuAcHH2+x1lgPXjVYQw8BFPMcHmwLVwGmCD3k/gLxvL4AaoxG04qcwOz0hcC9gVwPHgPvAe1O4tQDarUbrvdFuM7WCbkxiYmJiYmLS/AFeMc4nbZhNEwAAAABJRU5ErkJggg==">
                                </button>
                            </div>

                            <div class="menu-content-items-info-btn ">
                                <button>
                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAADyUlEQVRoge2Zy28WVRiHn1NaU6LQVmnVSrQGqjXB1BjBuFUTb4ks3LvANW5csHHpwsTogp2JceHaqHEhidW/wOBdiFZMNFBbFQrVUpDSx8W802+Y9vs6nV7czC85OXPmvNfzzrm9Aw0aNGjQoEEDUhUitQfYD4wCdwF3AMPAbcBuoB/oi+eeYOsFdhbE/ANci+cFYB6YAy5F3wwwBUwX6nPATEppsZZ3YfyI+pr6rfqv/x+uqO+rhzrZu2pE1CPAceDmwuvfgVPA2cKIzQAXYlTnoiwE/dWU0uWCzD6gK5q9ZNHri9IPDEXJIz4K3EsrwovAsZTSW2vEYFnh8+r1GI3P1afVgUrMmwy1W31U/SDsWVIPV2Hcof4WTG+olebQdkB9M+w6WYV4PIin1e5tsK8y1F3q5bDv7nJ/V6m9P+qvNrRSbAFSSn8Dp6P5QLm/7MhI1L9spVEbwE9R31fuKDtyT9Rn6mhRJ9QH6/BWxGTU95c7NjsiTwIn1ePqrTVldEIekTUd2RP1HxtQ1gMcBSbVo2angs1CHpHhjlTq17EqjNfRUtiNPyo8n1KfqSNvFfn7QmbngVYng3C0piJV4/kJ9buCQ5+oK1abdcofClmLHfc4dSoIO4euPf+yI9HuUl9UZ6Lrmvq2OlhTfm9hYHo7EV4Mor6aim5wpPC+X33d7ACoekE9pt5UQ8fVkLG7E1F+yq01Qds5Uugfi0+s9vxR/wreoeL78qq11VgCrhfaO6KsB3kUr7SlUGfD21qn3a3+tMxOw0tVJvvZULS3hh/bMdn3hJzzaxH+GIRjNRUtO6I+rn5TmA8T6oE6cgvyR0PWz2sRfhmEj9RUlGOrNsSDIXPFnaQ82eejrrX8FnCY7Ar8MjCeUjqxQXk58vPbxXJH+fI0HfVImXAdWATeBV5NKf25ATmrIb9QnSt3lB3Jv719NRWdAF5JKZ1ek7IecrtWnM7bOfJQHS0ppWfr8K0DuSMr7kvlOZI78pi63ZtlFbSNyA1QB22lgg5uvV3Voe5U58O+PVUYJsKRT93cS9GGYCsd9FlVhodtpV2+UJ9b71FisxBHkkOFfWnBNqnTdinTp4D3yFKYkC2pZ4Dvo54iS6FOAbNkSeg54FJKaamKgbTSpQNR7owyTLbMjpHNiXwQzwNHUkofV3YklA0CLwEvAAfI8rVVsESWC14N3cCuinIgyyP/AHwIvJNSanvFrfpboYssVTRKNmJ7gdujDJAlpPOS/0roAW4piCn/VpgrlFmyhPgMrST5JPBrlQg3aNCgQYMGDQL/ARVSx41szRchAAAAAElFTkSuQmCC">
                                </button>
                            </div>

                            <div class="menu-content-items-info-btn ">
                                <button>
                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAClUlEQVRoge2Zy27TQBSG/4mUbBregDdgQWkRhTcAIdG0qrqB96HAqhQWiGUv6/Y5uIkNhEI3TYB9UyQuUj4WnkruxInn4iQb/5KljHPOf84/9pwztqUaNWrUmCdMiDHQktSxx5Kkq5IWEnP4Jakv6b2kQ0mHxpi/iZyjANaBE6aPb8BalYk3gKczSNzFE6BRhYBnc0j+Alupya8XkP4GtoEVIPX+F7BguXaAPwXxOrHELUbv+T5wPTXpCTEXbYw8vgLNGLLNgpmvPHngvk26B9wDbhRciY0Y4gOHZLvq5G2cXi7GqT33wom9N85/0ipfdsb7Hsm07JU7ALrAuT269twmWS8pg5vwTQ+fkWTOnFlol9j79olLdd7eNj3gFLhrz11xfM5iBFzCBLvYPjGxzvvGr0JASp8YW+dnIgCPPkFknZ+6ACL6BAF1fhYCovoEnnXeV0DKZsm99K+MMR/LnIwxHyS9LuFKh8cV+OKY3Argvu34dkPjVyFg4JhM7BOOb9vxHcQKSN9vx8GNO6yKKAQ/nPG1AF/X9mdsEikC3jrjhwG+j5zxm4Q8iuGxBorK6KIH7xIVltEUAS2yjVke/UkibPLfHZ9j5tHIrM2aa2dndwe4Q1Zt2vb3y4KZHwIPYuMnC7B2KW8sHqfGr0JAg2xrHIIhsMWUt9OhDzQdso1ZGY6B1RKuSh5o3K3CiodPE9gA9oDPZN16AHwCdu1/pW8YyNZMHiNbDR8B+w7J82CSSJAt+Dx2Y0ii6nwq8OwTPkTBdT4VBPQJX8LSOl9B0lF9IiTAPN5MX2BsnwgREFPnU1HaJ2KE+Nb5VJT2iTxCPzE1Ja0qe4ZdVvaJKXUdnEvqSXon6UjSkTHmXyJnjRo1aswI/wHewskhvoy8HQAAAABJRU5ErkJggg==">
                                </button>
                            </div>

                        </div>
                    </div> -->

                    <!-- <div class="menu-content-items-info-version">

                        <p>Setes™ © Todos os direitos reservados.</p>

                    </div> -->

                    <!-- <div class="menu-content-items-info-user">
                    <img src="../../img/36e0e78e9c51bf5e0d076904534a6e05.jpg" alt="">
                    <h3><?php echo $idUser['name']?></h3>
                </div> -->
                </div>

            </div>

        </div>

        <div id="myNav" class="overlay">

            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> <img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAA10lEQVRIie2W3Q2CUAyFiztIcAe3YG4mwCcxYQeX+HxpIiEX6JEmJspJeKE9fLfl/pkd+ksBNXDzp97h78N+4AzceWsELgL0M7+PdK4hMnKvdCj4+3nuKVjI1cy6NbjHOs/VVWjVVMW2BTxNOjwNqsDToRP40mTB36/F5GWoVJ5b6Q54HlSAS9DoOo6qSv2a2Orw9poFzYPzjeW0UekINIEcrfIIVMiNwRVoKpzyeQwb/431+fDxefwws7aqqudSgsdaz9VVaJu0I+3ye9t6lMtaov/Qb+gFR+sH5aRmFKEAAAAASUVORK5CYII=">
            </a>

            <div class="overlay-b">

                <a href="historicoCompra.php"> Historico de compras</a>
                <a href="ticket.php" class="clicked">Suporte</a>
                <a href="#">Configurações</a>
                <a href="../../system/exit.php">Sair</a>
                
            </div>
        </div>

        <button class="nav-button" onclick="openNav()">
            <img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAL0lEQVRIiWNgGAUjB/z////wf+qBwzBzmWjlXhqZOwooAaOpaBRQDkZT0SgYvAAAlsLwrAZxxMIAAAAASUVORK5CYII=">
        </button>

        <div class="container">
            <div class="banner-novidades-content">
                <div class="banner-novidades-content-text-left">
                    <div class="banner-novidades-content-text-left-content">
                        <!-- <h1>SEJA BEM VINDO A AREA DO VENDEDOR <span><?php echo $_SESSION['usuario'];?>!</span></h1> -->
                    </div>
                </div>

                <div class="ticket-info">
                    <div class="ticket-info-content">
                        <h1>Produto com login invalido | <span>FECHADO</span></h1>
                        <div class="ticket-info-content-desc">
                            <p>Identificador do ticket: <span>42453</span></p>
                            <p>|</p>
                            <p>Data:<span>15/11/2022</span> - <span>16/11/2022</span></p>
                        </div>
                    </div>
                </div>

                <div class="ticket">
                    <form method="POST" action="../.././system/ticketSystem.php">
                        <div class="ticket-content">
                            <div class="ticket-content-cards-send">
                                <div class="ticket-content-cards-content">

                                    <input type="hidden" name="userid" value="<?php echo $idSeller['id']; ?>">
                                    <!-- <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAADX0lEQVRoge2YP0wUQRTGBwhgEFQQiFAZEoyJnYYOY2JsLa0IBBtjQmElVhpiZWlrcRaWUlKi/BEJBokFGCmIvRg1QaNHNPCz2Lfh3dzuMrN7B0u4L7nkdnbme++befPm7RhTwzEC0A28Bd4D3YftTyoAXcAqe1gHeg7bLy9EiDh6YiSc1sTxNSVCt+U7zKyVWAfOKSH2u3yuTJQIaQcgpk/+xEhmKgsdLUSedegtH463CQCWgBU7/m0h0tYtfZcO1ssMiBJSDdRX28BBoSYkb/ASAvQBE8BnYKbSzgAzwj0B9FWavBUYBeaAXXXAOQnx2ezArOLfFZujQGsWAVeAZ8AvRV4EXgI3gYYqCKkHBhPs3gDqXAU0A8vWzMwDt4E2J5KUQqxxbWJz3oqEZaDJ7h+1Rx4YYwbUc50x5qQx5pQxptnXoQyoN8bsGGP+Wu0DJvAxHkC/LOMuMAY8B7bUbGwDkxJajS7eAAvAG8e+jcI9KbZCbIkvY+JbEehPIpqWgQXVdgK4BUwB/xT5d4nlQRcn9xFwCXgCfFH8OwRfl3dQmx0oyPu5yP0CjEiHb0BXjMEe4B7wgVJ8IkiZ5z2cT8UFdACb0nc46eWIoyPOs6jGxK3uD5/VtSa9U78Il+t15HIlkybFdQG4Jr8CGfebslkHvBKeQth4lWADbQMXfQgjDJyW2ZqmNGVqrBCEVOf+jIm2dGK6btj7YntHUiZIZ2hJCagm/6ohiGmNReAu0F4BQ0XFWwQuZORsF98WLZ8Xwg5hOWLH8BTB5vSKYeGcphzRKTOZp4GgNHkB/FZcf4grW4AWYCjCgU3gKXDZ0fiwjPuqOML/rlnxstjcpBxDQIsLSYhx4KNFsgbcB3pjxnYop4fVOC3ubMzYXuHW92GID+Phg8tElAhRz6lPXs2FX+VQdrZkFqLa486Mn8TUQpaQTLVcxYRYfc4Qf2Y8jOMCHlGO8GyJLI2qKsTq3w88BjYIvvKa1DtbSJP02ZAxzmdL1YXkget43qLkGTUheUOiEN+sUi2EWTHNwDkrz6euiNNmLeIr3VlfoopUxD5CSFPpegjK9J3tIoQU3/+ZQIqbjzghBJVuRW5ksopymkUtJOvqVlvQfreDITLfWh4Y8LtFSax0cwNKK2LvSreGo47/0Qk4C1XRCYoAAAAASUVORK5CYII="> -->
                                    <!-- <h2>Ticket</h2>
                                    <p>Digite sua duvida.</p> -->
                                    <div class="ticket-content-cards-content-inpt">

                                        <input type="text" placeholder="Escreva sua mensagem aqui" name="description">
                                        <button class="text-left-start-btn" type="submit" name="ticket">Enviar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="ticket-content-cards-desc">

                                <div class="ticket-content-cards-desc-chat-content">

                                    <h1><?php echo $idUser['name']; ?> | <span class="cliente">Cliente</span></h1>
                                    <p>Comprei uma conta da Steam. Infelizmente, as credencias estao invalidas.</p>
                                </div>

                                <div class="ticket-content-cards-desc-chat-content">
                                    <h1>Nyx | <span class="atendente">Atendente</span></h1>
                                    <p>Estou verificando o possivel erro. Caso nao conseguirmos resolver isso, vamos
                                        reembolsar, pode ficar tranquilo!</p>
                                </div>

                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>