<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial">
        <title>Variável</title>
    </head>
    <body>
        <?php
        $nome = $_GET ["nome"];
        $idade = $_GET ["idade"];

        echo "<p>$nome $idade</p>";
        ?>
    </body>
</html>