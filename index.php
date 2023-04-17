<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>entrar</title>
</head>
<body>

    <main class="main">
            <form class="formulario__perguntas" action="processar-dados.php" method="POST">
                <div class="Cadastrar">
                <h2 class="cadastro__titulo">𝒞𝒶𝒹𝒶𝓈𝓉𝓇𝑜</h2>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <input type="senha" name="senha" id="senha" placeholder="Senha" required>
                <input type="submit" value="Cadastrar" class="perguntas__submit">
                <div class="informacoes-extras">
                    <a href="index.php">voce já é cadastrado(a)?</a>
                </div>
            </form>

        </div>
    </main>
</body>
</html>