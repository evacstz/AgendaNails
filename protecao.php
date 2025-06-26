<?php
    require_once 'conexao.php';

    if(isset($_SESSION['iduser']) && !empty($_SESSION['iduser'])):

    else: header("Location: ../login/pagina-login.php");
    endif;
?>