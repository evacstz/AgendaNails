<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wclassth=device-wclassth, initial-scale=1.0">
    <title>AgendaNails</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="lado-esquerdo">
        <h2 class="titulo-esquerdo">É um prazer ter um usuário novo</h2>
        <img src="../assets/img/freepik__adjust__38993.png" alt="Unhas e esmaltes" class="foto-decorativa">
    </div>

    <div class="lado-direito">
        <h2 class="titulo-direito">Seja bem-vindo(a) à tela de cadastro!</h2>

        <form action="cadastro.php" method="POST" class="form-login-cadastro">
            <label for="nome-completo" class="rotulos">Nome completo</label>
            <input type="text" name="nome-completo" class="input-nome-email-senha">

            <label for="email" class="rotulos">E-mail</label>
            <input type="text" name="email" class="input-nome-email-senha">

            <label for="senha" class="rotulos">Senha</label>
            <input type="password" name="senha" class="input-nome-email-senha">

            <div class="div-botao">
                <input type="submit" name="cadastrar" class="botao-entrar-cadastrar" value="CADASTRAR">
            </div>
        </form>

        <div class="redirecionamento">
            <p>Já tem uma conta?</p>
            <a href="../login/pagina-login.php" class="redireciona-login-cadastro">Entre aqui</a>
        </div>
    </div>
</body>
</html>