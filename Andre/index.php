<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial">
        <title>Variável</title>
        <style>
            body{
                background-color: black;
                text-align: center;
            }
            p{
                font-size: 40px;
                font-family: "Arial";
                color: white;
                font-weight: bold;
            }
            .nome{
                color: white;
                margin-top: 200px;
            }
            .idade:hover{
                font-size: 50px;
            }
            .peso:hover{
                font-size: 50px;
            }
            .altura:hover{
                font-size: 50px;
            }
            .nome:hover{
                font-size: 50px;
            }
        </style>
    </head>
    <body>
        <?php
        $nome = "André ";
        $idade = 16;
        $peso = 70;
        $altura= 1.85;
        const SOBRENOME = "Ferreira";

        echo "<p class= nome>Meu nome é $nome".SOBRENOME . "</p>";
        echo "<p class= idade>Tenho $idade anos </p>";
        echo "<p class= peso>Peso $peso quilos </p>";
        echo "<p class= altura>Tenho $altura de altura</p>";

        ?>
    </body>
</html>