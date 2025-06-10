<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgendaNails</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="lado-esquerdo">
        <h2 class="titulo-esquerdo">É um prazer te ver aqui de novo</h2>
        <img src="assets/img/freepik__adjust__38993.png" alt="Unhas e esmaltes" class="foto-decorativa">
    </div>

    <div class="lado-direito">
        <h2 class="titulo-direito">Seja bem-vindo(a) à tela de login!</h2>

        <form action="login.php" method="POST" class="form-login-cadastro">
            <label for="email" class="rotulos">E-mail</label>
            <input type="text" name="email" class="input-nome-email-senha" required>

            <label for="senha" class="rotulos">Senha</label>
            <input type="password" name="senha" class="input-nome-email-senha" required>

            <div class="div-botao">
                <input type="submit" name="entrar" class="botao-entrar-cadastrar" value="ENTRAR">
            </div>
        </form>

        <div class="redirecionamento">
            <p>Ainda não tem uma conta?</p>
            <a href="pagina-cadastro.php" class="redireciona-login-cadastro">Cadastre-se</a> 
        </div>
    </div>
</body>