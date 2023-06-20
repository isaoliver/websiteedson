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
        require "menu.php";

    ?>
    <form name="cadastro" method="post" action="" >
        <table>
            <tr>
                <td><label for="nome">Nome: </label></td>
                <td><input type="text" name="nome" size="40" maxlenght="40" placeholder="Informe seu nome Completo" required></td> 
            </tr>
            <tr>
                <td><label for="cidade">Cidade: </label></td>
                <td><input type="text" name="cidade" size="30" maxlenght="30" required></td>
        
            </tr>
            <tr>
                <td><label for="cpf">CPF</label></td>
                <td><input type="text" name="cpf" size="14" maxlenght="14" required></td>

            </tr>
            <tr>
                <td><label for="email">E-mail: </label></td>
                <td><input type="email" name="email" size="30" maxlenght="30" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
    </form>
</body>
</html>