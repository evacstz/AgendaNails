<<<<<<< HEAD:pagina-login.php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgendaNails</title>
    <link rel="stylesheet" href="assets/css/style-login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="lado-esquerdo">
        <h2 id="titulo-esquerdo">É um prazer te ver aqui de novo</h2>
        <img src="assets/img/freepik__adjust__38993.png" alt="Unhas e esmaltes" id="foto-decorativa">
    </div>

    <div id="lado-direito">
        <h2 id="titulo-direito">Seja bem-vindo(a) à tela de login!</h2>

        <form action="login.php" method="POST" id="form-login">
            <label for="email" class="rotulos">E-mail</label>
            <input type="text" name="email" class="input-email-senha" required>

            <label for="senha" class="rotulos">Senha</label>
            <input type="password" name="senha" class="input-email-senha" required>

            <div id="div-botao">
                <input type="submit" name="entrar" id="botao-entrar" value="ENTRAR">
            </div>
        </form>

        <div id="redireciona-para-cadastro">
            <p>Ainda não tem uma conta?</p>
            <p>Cadastre-se</p>
        </div>
    </div>
</body>
=======
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
    <div id="lado-esquerdo">
        <h2 id="titulo-esquerdo">É um prazer te ver aqui de novo</h2>
        <img src="assets/img/freepik__adjust__38993.png" alt="Unhas e esmaltes" id="foto-decorativa">
    </div>

    <div id="lado-direito">
        <h2 id="titulo-direito">Seja bem-vindo(a) à tela de login!</h2>

        <form action="login.php" method="POST" id="form">
            <label for="email" class="rotulos">E-mail</label>
            <input type="text" name="email" class="input-email-senha" required>

            <label for="senha" class="rotulos">Senha</label>
            <input type="password" name="senha" class="input-email-senha" required>

            <div id="div-botao">
                <input type="submit" name="entrar" id="botao-entrar" value="ENTRAR">
            </div>
        </form>

        <div id="redireciona-para-cadastro">
            <p>Ainda não tem uma conta?</p>
            <p>Cadastre-se</p>
        </div>
    </div>
</body>
>>>>>>> f822078042ec0d866656a28232ca2ba3dc3c307c:index.php
</html>