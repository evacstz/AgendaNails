<?php
    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {

        require_once '../conexao.php';
        require_once 'Usuario.class.php';

        $user = new Usuario();

        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);

        if($user->login($email, $senha) == true) {
            if(isset($_SESSION['iduser'])) {
                header("Location: ../pagina-inicial.php");
            } else {
                header("Location: ../login/pagina-login.php");
                exit;
            }
        } else {
            header("Location: pagina-login.php?erro=1");
            exit;
        }
    } else {
        header("Location: ../login/pagina-login.php");
        exit;
    }
?>