<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $host       = "localhost";// Server local
    $user       = "root";//Nome do Usurio de Droga
    $pass       = "usbw";// Senha do Banco de Dados
    $banco      = "bddespesas_pedro";// Nome do Banco
    $conexao    = mysqli_conect($host, $user, $pass) or die (mysqli_error($conexao));//Faz Conexao Com o banco, se nao conseguir sera mostrada uma mensagem de erro pelo comando mysqli_error
    mysqli_select_db($conexao, $banco); // Seleciona Atraves da Conexao do Banco
    ?>
</body>
</html>
