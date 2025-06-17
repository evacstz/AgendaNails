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

    if(isset($_POST['nome-completo']) && isset($_POST['email']) && isset($_POST['senha'])) {
        try {
            $consulta = $conexao->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
            $consulta->bindValue(":nome", $nome);
            $consulta->bindValue(":email", $email);
            $consulta->bindValue(":senha", md5($senha));
            $consulta->execute();
        } catch (PDOException $erro) { 
            echo "Erro: " . $erro->getMessage(); 
        }
    } else {
        echo "Erro ao tentar se cadastrar.s";
    }

    
?>