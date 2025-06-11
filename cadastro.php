<?php
    require_once 'conexao.php';

    if(!isset($_POST['nome-completo']) && !isset($_POST['email']) && empty($_POST['senha'])) {
        exit('Não é permitido acessar.');
    }

    $nome = trim($_POST['nome-completo']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    // echo $nome;
    // echo $email;
    // echo $senha;

    if(!$email || !$senha) { //socorro?????????????????
        exit("Por favor, preencha todos os campos");
    }
?>