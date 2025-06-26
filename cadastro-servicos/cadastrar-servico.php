<?php
    require_once '../conexao.php';

    if (!isset($_POST['nome-servico']) || !isset($_POST['preco'])) {
        exit('Não foi possível cadastrar um novo serviço.');
    }

    $servico = trim($_POST['nome-servico']);
    $preco = trim($_POST['preco']);

    if (empty($servico) || empty($preco)) {
        exit("Por favor, preencha todos os campos");
    }

    try {
        $consulta_verifica = $conexao->prepare("SELECT * FROM servicos WHERE nome_servico = :servico");
        $consulta_verifica->bindValue(":servico", $servico);
        $consulta_verifica->execute();

        if ($consulta_verifica->rowCount() > 0) {
            header("Location: pagina-servicos.php?erro=3");
            exit;
        } else {
            $consulta_insere= $conexao->prepare("INSERT INTO servicos (nome_servico, preco) VALUES (:servico, :preco)");
            $consulta_insere->bindValue(":servico", $servico);
            $consulta_insere->bindValue(":preco", $preco);
            $consulta_insere->execute();
                header("Location: pagina-servicos.php");
        }
    } catch (PDOException $erro) { 
        echo "Erro ao tentar cadastrar serviço: " . $erro->getMessage(); 
    }
?>