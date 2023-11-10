<?php
        
     session_start();

    unset( $_SESSION['logado']);
    unset($_SESSION['usuario']);
    unset($_SESSION['acesso']);
    unset( $_SESSION['id_user']);

    session_destroy();

    header('Location:../pages/index.php');

?>