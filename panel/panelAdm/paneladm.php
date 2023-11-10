<?php

require_once("../../class/Conn.class.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/paneladm.css">
</head>

<body>





        <section id="corpo">
                        <H4  style="text-align: center;"> Cadastro vendedor</H4>
                        <form action="../system/systemadm.php" method="POST">
                            <input type="text" name="nameseller" placeholder="Nome do vendedor">
                            <br>
                            <input type="text" name="cpfseller" placeholder="CPF do vendedor">
                            <br>
                            <input type="text" name="emailseller" placeholder="Email do vendedor">
                            <br>
                            <input type="text" name="telseller" placeholder="Telefone do vendedor">
                            <br>
                            <input type="text" name="senhaseller" placeholder="Senha do vendedor">
                            <br>
                            <input type="submit" value="Cadastrar">

                            <?php

                                    //retorna mensagem de erro
                                    if(isset($_GET['cadastroUser']) && $_GET['cadastroUser'] == 'sucesso' ):


                            ?>
                        </form>
                            <h5> Cadastro de vendedor efetuado com sucesso</h5>
                        <?php 

                            endif;
                        ?>

                        <div class="card">
                            <div class="card-title">Status pix Response</div>
                            <div class="card-text">
                                <table>
                                    <tr>
                                        <th>
                                           # 
                                        </th>
                                       
                                        <th>
                                           Status 
                                        </th>

                                        <th>
                                           Codigo transação 
                                        </th>
                                    </tr>

                                        <?php
                                                //pega as informações do status de transação do pix no banco dedados
                                            $stmt = $conn->prepare("SELECT status, id, idtransacao FROM  statuspixresponse ORDER BY id ");
                                            $stmt->execute();
                                            $result = $stmt->fetchAll();

                                            foreach ($result as $dados ) {
                                                # code...
                                            

                                        ?>
                                    <tr>
                                         <td>
                                            <?php echo $dados['id'];?>
                                        </td>
                                        <td>
                                            <?php echo $dados['status'];?>
                                        </td>
                                        <td>
                                            <?php echo $dados['idtransacao'];?>
                                        </td>
                                    </tr>
                                        <?php

                                                }

                                        ?>
                                </table>
                            </div>
                        </div>
           

        </section>



</body>
</html>
