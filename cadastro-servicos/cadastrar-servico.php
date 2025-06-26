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
        $consulta_verificacao = $conexao->prepare("SELECT * FROM servicos WHERE nome_servico = :servico");
        $consulta_verificacao->bindValue(":servico", $servico);
        $consulta_verificacao->execute();

        if ($consulta_verificacao->rowCount() > 0) {
            header("Location: pagina-servicos.php?erro=3");
            exit;
        } else {
            $consulta_insercao= $conexao->prepare("INSERT INTO servicos (nome_servico, preco) VALUES (:servico, :preco)");
            $consulta_insercao->bindValue(":servico", $servico);
            $consulta_insercao->bindValue(":preco", $preco);
            $consulta_insercao->execute();
                header("Location: pagina-servicos.php");
        }
    } catch (PDOException $erro) { 
        echo "Erro ao tentar cadastrar serviço: " . $erro->getMessage(); 
    }
?>