<?php
    require_once 'conexao.php';

    if(isset($_SESSION['iduser']) and !empty($_SESSION['iduser'])):
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <h1>Seja bem-vindo ao sistema.🖥️</h1>
    <a href="login/logout.php">SAIR</a>
</body>
</html>

<?php
    else: header("Location: pagina-login.php");
    endif;
?>