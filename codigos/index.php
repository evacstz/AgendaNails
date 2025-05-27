<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgendaNails</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="lado-esquerdo">
        <h2 id="titulo-esquerdo"> É um prazer te ver aqui de novo </h2>
        <img src="assets/img/freepik__adjust__38993.png" alt="Unhas e esmaltes" id="foto-decorativa">
    </div>

    <div id="lado-direito">
        <h2 id="titulo-direito">Seja bem-vindo(a) à tela de login!</h2>

        <form action="" id="form">
            <label for="nome-email" class="rotulos">Nome de usuário/e-mail</label>
            <input type="text" name="nome-email" class="input-nome-senha">

            <label for="senha" class="rotulos">Senha</label>
            <input type="password" name="senha" class="input-nome-senha">

            <div id="div-botao">
                <input type="submit" name="entrar" id="botao-entrar" value="ENTRAR">
            </div>
        </form>

        <div id="redireciona-cadastro">
            <p>Ainda não tem uma conta?</p>
            <p>Cadastre-se </p>
        </div>
    </div>
</body>
</html>