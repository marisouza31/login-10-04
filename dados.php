<?php 
    function processarDados(){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $arquivo = fopen('registro.txt' , 'a');
        fwrite($arquivo , "$email-$senha\n");
    }
    processarDados();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscrever-se</title>
</head>
<body>

</body>
</html>
