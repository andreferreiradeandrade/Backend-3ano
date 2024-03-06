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
        $altura = $_GET ["altura"];
        $peso = $_GET ["peso"];

        echo "<p>Seu nome é $nome tem $idade anos, $altura de altura e pesa $peso</p>";
        ?>
    </body>
</html>
