<?php

    if(isset($_POST['email']) && (isset($_POST['senha']))){
        $arquivo = fopen("dados.txt", "a");
        fwrite($arquivo, 'Email: ' . $_POST['email'] . "\n");
        fwrite($arquivo, 'Senha: ' . $_POST['senha'] . "\n");
        fwrite($arquivo, '' . "\n");
        fclose($arquivo);
    }

    function resultDados($emailLogin, $senhaLogin){
        $arquivo = 'dados.txt'; 

        if(file_exists($arquivo)){

            $arq = fopen($arquivo , 'r');
            $texto = fread($arq, filesize($arquivo) );

            if(isset($emailLogin) && isset($senhaLogin)){
                if(str_contains($texto, $emailLogin) && str_contains($texto, $senhaLogin)){  
                }
            }
        }
    }
        ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#9370DB">
    <h1>𝓛𝓸𝓰𝓲𝓷</h1>
    <form name="dados_pessoas" method="POST" action="result.php">
        <label for="emailLogin">𝐞𝐦𝐚𝐢𝐥:</label><input type="text" name="emailLogin" id="emailLogin" class="campo"><br>
        <label for="senhaLogin">𝐬𝐞𝐧𝐡𝐚:</label><input type="password" name="senhaLogin" id="senhaLogin"><br>  
            <div class="mb-3">
              <input class="btn btn-lg btn-success" style="background-color: rgb(123,104,238);" type="submit" name="Cadastrar" value="Cadastrar">
            </div>
        <br>
    </form>
</body>
</html>