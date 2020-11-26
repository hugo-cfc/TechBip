<!DOCTYPE html>
<html lang pt br>
    <head>
        <meta charset="UTF 8">
        <title> Cadastrar Nome </title>
    </head>
    <body>
        <?php
            session_start();
            include 'conexao.php';
        ?>
        <h1>Novo Cadastro<h1>
        <form name ="cadastro" method="POST" action="banco_resultados.php">
            Nome: <input type="text" name="nome"><br>
            Telefone: <input type="text" name="telefone"><br>
            <input type="reset" value="Limpar"> <input type="submit" value="Enviar">
        </form>
    </body>
</html>