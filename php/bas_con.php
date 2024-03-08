<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arquivo php</title>
    <link rel="stylesheet" href="../css/estilo.css">
    </head>
<body>

<?php
    $oct = $_GET["otd"];
    echo base_convert($oct,8,10);

    $hex = $_GET["octh"]; 
    echo base_convert($hex,16,8);


?>
<br>
    <a href="http://localhost/Andre/funcoes/index.html">voltar</a>

</body>
</html>