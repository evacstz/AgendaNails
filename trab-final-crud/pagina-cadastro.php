<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgendaNails</title>
    <link rel="stylesheet" href="assets/css/style-cadastro.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="lado-esquerdo">
        <h2 id="titulo-esquerdo">É um prazer ter um usuário novo</h2>
        <img src="assets/img/freepik__adjust__38993.png" alt="Unhas e esmaltes" id="foto-decorativa">
    </div>

    <div id="lado-direito">
        <h2 id="titulo-direito">Seja bem-vindo(a) à tela de cadastro!</h2>

        <form action="cadastro.php" method="POST" id="form-cadastro">
            <label for="nome-completo" class="rotulos">Nome completo</label>
            <input type="text" name="nome-completo" class="input-nome-email-senha" required>

            <label for="email" class="rotulos">E-mail</label>
            <input type="text" name="email" class="input-nome-email-senha" required>

            <label for="senha" class="rotulos">Senha</label>
            <input type="password" name="senha" class="input-nome-email-senha" required>

            <div id="div-botao">
                <input type="submit" name="cadastrar" id="botao-cadastrar" value="CADASTRAR">
            </div>
        </form>

        <div id="redireciona-para-login">
            <p>Já tem uma conta?</p>
            <p>Entre aqui</p>
        </div>
    </div>
</body>
</html>