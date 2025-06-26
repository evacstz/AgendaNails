<?php 
    require_once '../protecao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgendaNails</title>
    <link rel="stylesheet" href="../assets/css/base-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="div-pai">
        <div class="menu-lateral">
            <div class="agenda-nails">AgendaNails</div>
                <div class="menu">
                    <a href="../pagina-inicial.php" class="abas-menu">Página inicial</a>
                    <a class="abas-menu">Clientes</a>
                    <a class="abas-menu">Serviços</a>
                    <a class="abas-menu">Agendamentos</a>
                    <a class="abas-menu">Financeiro</a>
                </div>
            <div class="botao-sair-div">
                <a href="../login/logout.php" class="botao-sair">Sair</a>
            </div>
        </div>

        <div class="conteudo-central">
            <div class="barra-superior">
                <h3 class="mensagem">SERVIÇOS</h3>
            </div>

            <div id="texto-cadastrar">
                <h5>CADASTRAR NOVO SERVIÇO</h5>
            </div>

            <form action="cadastrar-servico.php" method="POST" id="cadastrar-servico">
                <div class="grupo-inputs">
                    <label for="nome-servico" class="rotulos">Serviço:</label>
                    <input type="text" name="nome-servico" class="input-nome-preco" required>

                    <label for="preco" class="rotulos">Preço:</label>
                    <input type="text" name="preco" step="0.01" class="input-nome-preco" required>
                </div>

                <div class="div-botao">
                    <input type="submit" name="cadastrar" class="botao-servico" value="CADASTRAR SERVIÇO">
                </div>
            </form>
            
            <div class="erro-servico-cadastrado">
                <?php
                    if (isset($_GET['erro']) && $_GET['erro'] == 3) {
                        echo '<p>Este serviço já está cadastrado.</p>';
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>