<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3>cadastro login</h3>
        <form name="login" method="post" action="">
            <div class="form_group">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" maxleght="40" required>
            </div>
            <div class="form_group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" maxleght="20" required>
            </div>
            <input type="submit" value="Cadastrar" name="cadastrar">
        </form>
    </div>
    <?php
        if(insset($_POST["cadastrar"]))
        {

            $usuario        =   $_POST["usuario"];
            $senha          =   $_POST["senha"];
            require "conexao.php";
            $sql="  VALUES (null, '$usuario', '$senha')";
            $sql=" VALUES (null, "
            mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
            echo "<h3>Login cadastro com sucesso!</h3>";
        }
    ?>
</body>
</html>