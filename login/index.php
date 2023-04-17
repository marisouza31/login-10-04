<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>cadastro</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body style="background-color:#BA55D3">
        <h1>𝓒𝓪𝓭𝓪𝓼𝓽𝓻𝓸</h1>
        <form name="cadastro" method="POST" action="login.php">
            <label for="email">𝐞𝐦𝐚𝐢𝐥:</label><input type="email" name="email" id="email" required class="campo"> <br>
            <label for="senha">𝐬𝐞𝐧𝐡𝐚:</label><input type="password" name="senha" id="senha" required> <br>
            <div class="mb-3">
              <input class="btn btn-lg btn-success" style="background-color: rgb(218,112,214);" type="submit" name="Cadastrar" value="Cadastrar">
            </div>
        </form>
    </body>
</html>