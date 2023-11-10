<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

    <div class="container-sec">


        <div class="topnav">

            <div class="a">
                <a class="nada" href="#home"><img src="../img/7slogo-semfundo.png" alt=""></a>
            </div>

            <div class="b">
                <a href="index.php" class="split">Principal</a>
                <a href="home.php" class="nada">Produtos</a>
                <a href="#banner5-red" class="nada">Contato</a>
                <a href="login.php" class="nada">Area cliente</a>
            </div>

            <div id="myNav" class="overlay">


                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAA10lEQVRIie2W3Q2CUAyFiztIcAe3YG4mwCcxYQeX+HxpIiEX6JEmJspJeKE9fLfl/pkd+ksBNXDzp97h78N+4AzceWsELgL0M7+PdK4hMnKvdCj4+3nuKVjI1cy6NbjHOs/VVWjVVMW2BTxNOjwNqsDToRP40mTB36/F5GWoVJ5b6Q54HlSAS9DoOo6qSv2a2Orw9poFzYPzjeW0UekINIEcrfIIVMiNwRVoKpzyeQwb/431+fDxefwws7aqqudSgsdaz9VVaJu0I+3ye9t6lMtaov/Qb+gFR+sH5aRmFKEAAAAASUVORK5CYII=">
                </a>

                <div class="overlay-b">

                    <a href="#news" class="split">Principal</a>
                    <a href="#contact" class="nada">Produtos</a>
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

    <div class="container">

        <div class="banner-novidades-content">
            <div class="banner-novidades-content-text-left">

                <div class="banner-novidades-content-text-left-content">

                    <h1 class="animate__animated animate__backInDown">SEJA BEM VINDO!<span></span></h1>
                    <p class="banner-novidades-content-text-left-content-p">Lorem ipsum dolor sit amet. Qui commodi vero
                        est galisum enim ab ipsa rerum vel eveniet rerum id
                        quam
                        enim cum voluptas
                        Lorem ipsum dolor sit amet. Qui commodi vero est galisum enim ab ipsa rerum vel eveniet rerum id
                        quam
                        enim cum voluptas</p>

                    <a class="text-left-start-btn" href="">SABER MAIS</a>

                </div>

            </div>


            <div class="banner-novidades-content-img-right">



            </div>
        </div>
    </div>

    <!-- Qualidades-->

    <div class="container">

        <div class="banner3">
            <div class="banner3-content">

                <div class="banner3-content-cards">

                    <div class="banner3-content-cards-content">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAAFI0lEQVRoge2ZX2wVRRTGzxSa0lp4AKNGWipoIKJSbSK+KW01RoOYEKkID1D1QS0GnzQGQSREE40EEy0+FWN8UYMkbZEYxcaYSCFYUTHRQCumKGpaQFu42H8/H+Zs7vT2dnfn3m1vYjzJze7Ofuf7zuzuzJw5V+R/G2+AAZ4ETgBDQDewDagAKvW8BzgPdAGNgCl03BMMeAt/ay503OMMWKeBpYA1QDGwAmgFBvTXCtQBpYpJqc+6QgZeDjwKvKwBDmtQT3lwNKnPMNAGvKKc5VMZuxtAjX7rrg0D23PgegkYyeDqBm7z5fIabMBsEflWRBaKSKeIHBCRXhE5ZIw54yuunJUiUicilSKyUkTuEJEeEak2xgzmwhlH9DF9aoeBGVPAPwPoVI1GH98iT63Femwzxox6+kaacrbq5RIfX9+OLNXjr55+PhZwLw1F5WrAeh2Yw/pdT5XOAkcnuakZKALedmYV79kphHsusB+4MaN9h6O3hyQyAGeAp3zWiZjcLcr9SZZ7Tc6i6TXwJxM7rmQP5U02nrceGNNgF0+CaVDtriQEzytZad5kac4y4JTyPh+Cu0IxfUmIBqt4Xd5kac5XlfM4UByCq1fcySREtypZazQ6Fl+NzkgjwO0R2DbV3pqEcIWS/Z0A10zgmPK9HgM/qNiKfLUjO4LdNHUAN8Tgela5ThMjy026I6GfFvCB3v8NqA7huR64qNh7Y2oHn9a2XON3ybrDBjswBzikmAtAbRaMAT5TzLse2nXqcyqfPgRk55SsLARTAryvuMvAmoz7jXrvT+BKD+0y9evPpw8BWZeSNUTgioA3FDsKbNL2q4F+bV/vqZ3oghg8zRTQFAP/HHbFBrsVDt7Ux566boqyMfcepAkN0EzadsTw2YAtCQU2AFR5aO50fJtJsmyErZQM629BDPx9pKfPzR46VUxFGp8h0qqBbYiJXw6047EtBjaqhlcm4btDPKHH+XHAxpijxpiVntvia/X4g09gvh0JyFf5POW4ppyr9PJ7H1/fclCpiPwktnRzRETaReSM2HJQrw+Xw1klIrUiUiEiD4jIcrElpiXGmFQunHGFbwF+YbyNxJnNsnDtZGKB7jRw81TEni2AEqBXhY+RLplGrjMOh1syPazn/YRkEIkbUKvCf2CL0g/rdQq7GpdjN0Vt2ETxop7X670G4JL6rMWm9z/r9erp7MhBFX3BaduDv+12/J/Wts7p6sQybAoyAMx12g02nfka6ANOYrcA84H7nc/onGIex1mxsfvzPsXdOR0deU/Fdnn47FWf0F0hsF1x7flHGi5Uic2hhoiZOwFXYcfOCLAoAjsPm9aMEbJJy9uA3frEfDZHwVPeFxP/puLfyT3ScIG5Oi7GgGUxfUqAsxrY3TF9FunbG8Jjr+6TojSJSLmIHDTGfBfT5xERuUbPb4rjYIzpEZEPRaRYRJ7xiC/agFnOk13h4feNM9X2EDM/A6r1zQ8C83KPfCLxExrMUQ+fu9Tnd9IFjAc9/D9Vn0lLqt4G/Ei4HcH+v+j67Nd7LwKb9bwjAzML+DyC+yzgm6VP2pEvIsQA9qELHOkBexlbfJgD/KW4Wx3elqxM460rsY5EdHIh6RV5i7YF03SLg9ulbXv1epNeXwJqpjzQOAbco29gFJsEXsjy9K9z3tJq4B/sgF5byNgnGLBFgw9KQR1ZMB9lYF4rRKyhhk0agxoWZJmhSM9kYEuoMwsRa6QBs4GvgC8nG6DAAewfPMmtD/8l+xe6TS+/V8UgmAAAAABJRU5ErkJggg==">
                        <h2>Lorem Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet. Hic minima necessitatibus ut cumque placeat sed molestiae
                            molestiae ut commodi odit eum explicabo nulla. Aut eaque aliquid sed unde nihil aut quam
                            quod qui delec</p>
                    </div>

                    <div class="banner3-content-cards-content">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAAFI0lEQVRoge2ZX2wVRRTGzxSa0lp4AKNGWipoIKJSbSK+KW01RoOYEKkID1D1QS0GnzQGQSREE40EEy0+FWN8UYMkbZEYxcaYSCFYUTHRQCumKGpaQFu42H8/H+Zs7vT2dnfn3m1vYjzJze7Ofuf7zuzuzJw5V+R/G2+AAZ4ETgBDQDewDagAKvW8BzgPdAGNgCl03BMMeAt/ay503OMMWKeBpYA1QDGwAmgFBvTXCtQBpYpJqc+6QgZeDjwKvKwBDmtQT3lwNKnPMNAGvKKc5VMZuxtAjX7rrg0D23PgegkYyeDqBm7z5fIabMBsEflWRBaKSKeIHBCRXhE5ZIw54yuunJUiUicilSKyUkTuEJEeEak2xgzmwhlH9DF9aoeBGVPAPwPoVI1GH98iT63Femwzxox6+kaacrbq5RIfX9+OLNXjr55+PhZwLw1F5WrAeh2Yw/pdT5XOAkcnuakZKALedmYV79kphHsusB+4MaN9h6O3hyQyAGeAp3zWiZjcLcr9SZZ7Tc6i6TXwJxM7rmQP5U02nrceGNNgF0+CaVDtriQEzytZad5kac4y4JTyPh+Cu0IxfUmIBqt4Xd5kac5XlfM4UByCq1fcySREtypZazQ6Fl+NzkgjwO0R2DbV3pqEcIWS/Z0A10zgmPK9HgM/qNiKfLUjO4LdNHUAN8Tgela5ThMjy026I6GfFvCB3v8NqA7huR64qNh7Y2oHn9a2XON3ybrDBjswBzikmAtAbRaMAT5TzLse2nXqcyqfPgRk55SsLARTAryvuMvAmoz7jXrvT+BKD+0y9evPpw8BWZeSNUTgioA3FDsKbNL2q4F+bV/vqZ3oghg8zRTQFAP/HHbFBrsVDt7Ux566boqyMfcepAkN0EzadsTw2YAtCQU2AFR5aO50fJtJsmyErZQM629BDPx9pKfPzR46VUxFGp8h0qqBbYiJXw6047EtBjaqhlcm4btDPKHH+XHAxpijxpiVntvia/X4g09gvh0JyFf5POW4ppyr9PJ7H1/fclCpiPwktnRzRETaReSM2HJQrw+Xw1klIrUiUiEiD4jIcrElpiXGmFQunHGFbwF+YbyNxJnNsnDtZGKB7jRw81TEni2AEqBXhY+RLplGrjMOh1syPazn/YRkEIkbUKvCf2CL0g/rdQq7GpdjN0Vt2ETxop7X670G4JL6rMWm9z/r9erp7MhBFX3BaduDv+12/J/Wts7p6sQybAoyAMx12g02nfka6ANOYrcA84H7nc/onGIex1mxsfvzPsXdOR0deU/Fdnn47FWf0F0hsF1x7flHGi5Uic2hhoiZOwFXYcfOCLAoAjsPm9aMEbJJy9uA3frEfDZHwVPeFxP/puLfyT3ScIG5Oi7GgGUxfUqAsxrY3TF9FunbG8Jjr+6TojSJSLmIHDTGfBfT5xERuUbPb4rjYIzpEZEPRaRYRJ7xiC/agFnOk13h4feNM9X2EDM/A6r1zQ8C83KPfCLxExrMUQ+fu9Tnd9IFjAc9/D9Vn0lLqt4G/Ei4HcH+v+j67Nd7LwKb9bwjAzML+DyC+yzgm6VP2pEvIsQA9qELHOkBexlbfJgD/KW4Wx3elqxM460rsY5EdHIh6RV5i7YF03SLg9ulbXv1epNeXwJqpjzQOAbco29gFJsEXsjy9K9z3tJq4B/sgF5byNgnGLBFgw9KQR1ZMB9lYF4rRKyhhk0agxoWZJmhSM9kYEuoMwsRa6QBs4GvgC8nG6DAAewfPMmtD/8l+xe6TS+/V8UgmAAAAABJRU5ErkJggg==">
                        <h2>Lorem Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet. Hic minima necessitatibus ut cumque placeat sed molestiae
                            molestiae ut commodi odit eum explicabo nulla. Aut eaque aliquid sed unde nihil aut quam
                            quod qui delec</p>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container">
        <div class="banner4">
            <div class="banner4-content">

                <div class="banner4-content-text-left">

                    <div class="banner4-content-text-left-text">
                        <h1>Sobre nos</h1>
                        <p>Lorem ipsum dolor sit amet. Hic minima necessitatibus ut cumque placeat sed molestiae
                            molestiae ut commodi odit eum explicabo nulla. Aut eaque aliquid sed unde nihil aut quam
                            quod qui delectus molestiae ut commodi odit eum explicabo nulla. Aut eaque aliquid sed unde
                            nihil aut quam
                            quod qui delectus
                        </p>
                        <a class="banner4-content-text-left-text-btn" href="">ABIR UM TICKET</a>
                    </div>

                </div>

                <div class="banner4-content-img-right animate__animated animate__slideInRight">
                    <img src="../img/7slogo-semfundo.png" alt="">
                </div>

            </div>
        </div>
    </div> -->

    <div class="container">

        <div id="banner5-red"></div>

        <div class="banner5">
            <div class="banner5-content">

                <div class="banner5-content-text-left">
                    <h1>Formas de entrar em contato</h1>
                    <p>Lorem ipsum dolor sit amet. Hic minima necessitatibus ut cumque placeat sed molestiae
                        molestiae ut commodi odit eum explicabo nulla. Aut eaque aliquid sed unde nihil aut quam
                        quod qui delectus</p>
                </div>

                <div class="banner5-content-cards-right">

                    <div class="banner5-content-cards-right-menor">

                        <div class="banner5-content-cards-right-menor-content animate__animated animate__slideInDown">
                            <img
                                src="data:image/png;base64,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">

                            <h2>Ticket</h2>
                            <a class="banner5-content-cards-right-menor-content-btn" href="">ABIR UM TICKET</a>
                        </div>

                        <div class="banner5-content-cards-right-menor-content animate__animated animate__slideInUp">
                            <img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAACSklEQVRIie3VzYtXVRwG8M8xFSWRFpKYmIK6SUzEFEIXiiD+BUJrW8oYuDMjN4pgLXQVRG7cCJFWouULgmLMQiqhhiLElShiaPkWjtnj4tzBYZz53d+MP6WFDxzuveec+zzft/M9vMT/AUm2JfkvyawkC1OxuRfck1rWT6BgJd5t5k72Qnhyp8VSyq9JrmAVZuEXXE+yFfPwbSnlXJL3MA2H0IdzpZT+Z7IsyRdJjibpT7I3ye4kd5IcSTKYZH6SM0l+blKSJB+28baFmhruFXgb36sh/wkfY0qzNm50I3waryM4r4b4TjPgjYkId8wxlFJuJvkdN0opD5KUkVsmItyNxzDYDLiGGc0Y+g5eeR7Cw/EjlmMHHqn5vopF+BR3uyFpDXWD/bjfvG9vhOZiYynlcpKdqufH1Zq41EY4Zn6SzDTO8I2CR6WU213tTLIkyUB6h4EkS7oR7u+h6BB+GKnzVKiTPPQk9/vU3A1hhyfVDGvxEda3+PNvKWXK8InRqnpkwZ3HwTEIL+JWi+honK3HaavqzZtq8/8OD/Elrjd7/sQB3FTP82F8hr/HZUkHXCilbEpyq3meaua/wQB+w2LsxRz1vH/eC+GxsFk9v3/gBtZgGb7q9FMvhKl38V31tupvxrQXITzYCE3HBuxSu9uYGE+vfq157k8yddj8MZxV87tU7d192NOJbDSP/1EtH8IazMbq1J78Fj7BAnyAd9Ri6muMC/7ClhGcnZHk6+fQuQ534/H7uI11eLXV0s64hzPY9ow8LzFxPAaBfs3T6k1wgAAAAABJRU5ErkJggg==">

                            <h2>Youtube</h2>
                            <a class="banner5-content-cards-right-menor-content-btn" href="">NOSSO CANAL</a>
                        </div>

                    </div>

                    <div class="banner5-content-cards-right-maior animate__animated animate__slideInRight">
                        <iframe src="https://discord.com/widget?id=1012945151951392859&theme=dark" width="350"
                            height="421" allowtransparency="true" frameborder="0"
                            sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <div class="container">

        <div class="banner-faq">

            <div class="banner-faq-left">

                <h1>Perguntas frequentes</h1>
                <p>Lorem ipsum dolor sit amet. Hic minima necessitatibus ut cumque placeat sed molestiae
                    molestiae ut commodi odit eum explicabo nulla. Aut eaque aliquid sed unde nihil aut quam
                    quod qui delectus</p>

            </div>

            <div class="banner-faq-right">

                <div class="banner7">

                    <div class='question'>
                        <input type='checkbox' id='question-1'>
                        <label for='question-1'>Quais os metodos de pagamentos?</label>
                        <div class='answer'>
                            Lorem ipsum dolor sit amet. Hic minima necessitatibus ut cumque placeat sed molestiae
                            molestiae
                        </div>
                    </div>

                    <div class='question'>
                        <input type='checkbox' id='question-2'>
                        <label for='question-2'>Como posso saber se o sistema de pagamento e seguro?</label>
                        <div class='answer'>
                            Lorem ipsum dolor sit amet. Hic minima necessitatibus ut cumque placeat sed molestiae
                            molestiae
                        </div>
                    </div>

                    <div class='question'>
                        <input type='checkbox' id='question-3'>
                        <label for='question-3'>Tem reembolso?</label>
                        <div class='answer'>
                            Lorem ipsum dolor sit amet. Hic minima necessitatibus ut cumque placeat sed molestiae
                            molestiae
                        </div>
                    </div>

                    <div class='question'>
                        <input type='checkbox' id='question-4'>
                        <label for='question-4'>Como eu entro em contato com o suporte?</label>
                        <div class='answer'>
                            Lorem ipsum dolor sit amet. Hic minima necessitatibus ut cumque placeat sed molestiae
                            molestiae
                        </div>
                    </div>

                    <div class='question'>
                        <input type='checkbox' id='question-5'>
                        <label for='question-5'>Quais as formas de contato?</label>
                        <div class='answer'>
                            Lorem ipsum dolor sit amet. Hic minima necessitatibus ut cumque placeat sed molestiae
                            molestiae
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="feedback">
            <div class="slideshow-container">
                <div class="mySlides fade">

                    <img src="../img/7slogo-semfundo.png" alt="">
                    <h2>Sw</h2>
                    <p>" Lorem ipsum dolor sit amet. Hic minima necessitatibus ut cumque placeat sed molestiae
                        molestiae "</p>

                </div>
                <div class="mySlides fade">

                    <img src="../img/7slogo-semfundo.png" alt="">
                    <h2>Facked</h2>
                    <p>" Lorem ipsum dolor sit amet. Hic minima necessitatibus ut cumque placeat sed molestiae
                        molestiae "</p>

                </div>
                <div class="mySlides fade">

                    <img src="../img/7slogo-semfundo.png" alt="">
                    <h2>SerWindows</h2>
                    <p>" Lorem ipsum dolor sit amet. Hic minima necessitatibus ut cumque placeat sed molestiae
                        molestiae "</p>

                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

            </div>
            <br>
            <div class="banner-faq-left">

                <h1>Feedback de nosso clientes</h1>
                <p>Lorem ipsum dolor sit amet. Hic minima necessitatibus ut cumque placeat sed molestiae
                    molestiae ut commodi odit eum explicabo nulla. Aut eaque aliquid sed unde nihil aut quam
                    quod qui delectus</p>

            </div>
        </div>
    </div>

    <!--

    <div class="container">
        <div class="banner-novidades-content-infos">

            <div class="banner-novidades-content-infos-cards animate__animated animate__slideInLeft">
                <img
                    src="data:image/png;base64,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">
                <h1>Clientes satisfeitos</h1>
                <p>+500</p>
            </div>

            <div class="banner-novidades-content-infos-cards animate__animated animate__slideInUp">
                <img
                    src="data:image/png;base64,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">
                <h1>Membros em nosso Discord</h1>
                <p>+500</p>
            </div>

            <div class="banner-novidades-content-infos-cards animate__animated animate__slideInRight">
                <img
                    src="data:image/png;base64,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">
                <h1>Vendas realizadas</h1>
                <p>+500</p>
            </div>

        </div>
    </div>

    -->

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