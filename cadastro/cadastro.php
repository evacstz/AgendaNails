<?php
    require_once '../conexao.php';

    if(!isset($_POST['nome-completo']) && !isset($_POST['email']) && !isset($_POST['senha'])) {
        exit('Não é permitido acessar.');
    }

    $nome = trim($_POST['nome-completo']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    if(empty($nome) || empty($email) || empty($senha)) {
        exit("Por favor, preencha todos os campos");
    }
?>