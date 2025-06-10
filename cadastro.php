<?php
    require_once 'conexao.php';

    if(!isset($_POST['nome-completo']) or !isset($_POST['email']) or !isset($_POST['senha'])) {
        exit('Não é permitido acessar.');
    }

    $nome = trim($_POST['nome-completo']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    // echo $nome;
    // echo $email;
    // echo $senha;

    if(empty($nome) or empty($email) or empty($senha)) {
        echo 'não pode entrar';
    }
?>