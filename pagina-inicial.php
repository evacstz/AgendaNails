<?php
    require_once 'conexao.php';

    if(isset($_SESSION['iduser']) && !empty($_SESSION['iduser'])):
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgendaNails</title>
    <link rel="stylesheet" href="assets/css/inicial.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="div-pai">
        <div class="menu-lateral">
            <div class="agenda-nails">AgendaNails</div>
                <div class="menu">
                    <a class="abas-menu">Página inicial</a>
                    <a class="abas-menu">Clientes</a>
                    <a href="cadastro-servicos/pagina-servicos.php" class="abas-menu">Serviços</a>
                    <a class="abas-menu">Agendamentos</a>
                    <a class="abas-menu">Financeiro</a>
                </div>
            <div class="botao-sair-div">
                <a href="login/logout.php" class="botao-sair">Sair</a>
            </div>
        </div>

        <div class="barra-superior">
            <h3 class="mensagem">Seja bem-vindo(a), admin!</h3>
        </div>
    </div>
</body>
</html>

<?php
    else: div("Location: pagina-login.php");
    endif;
?>