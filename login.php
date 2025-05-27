<?php
    if(isset($_POST['email']) and !empty($_POST['email']) and isset($_POST['senha']) and !empty($_POST['senha'])) {

        require 'conexao.php';
        require 'Usuario.class.php';

        $user = new Usuario();

        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);

        $user->login($email, $senha);
    } else {
        header("Location: index.php");
    }
?>