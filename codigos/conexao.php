<?php
    $localhost = "localhost";
    $user = "root";
    $senha = "";
    $banco = "AgendaNails";

    global $conexao;

    try {
        $conexao = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("set names utf8");
    } catch (PDOException $erro) {
        echo "Erro na conexão:" . $erro->getMessage();
    }
?>