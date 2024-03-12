<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arquivo php</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>

.space{
    height: 750px
}

body{
    background-color: #8C52FF;
    display: flex;
    justify-content: center; 
    align-items: center; 
    flex-direction: column;
    height: 100vh; 
    margin: 0;
}

p{
    font-family: Montserrat;
    color: white;
    font-weight: bold;
    text-align: center;
    font-size: 40px;
    margin-top: 50px;
}

.bot{
    background-color: #5CE1E6;
    font-family: "Montserrat",sans-serif;
    color: white;
    font-weight: bold;
    width: 170px;
    height: 50px;
    font-size: 20px;
    border-radius: 30px;
    border: none;
    align-self: center;
    margin-top: 40px
}
</style>

    </head>
<body>


<?php

$val = $_GET["val"];;
echo"<p>O cosseno do número é: ".(cos($val));
 
?>


<br>
<a href="http://localhost/Andre/funcoes/index.html"><button class="bot">voltar</button></a>

</body>
</html>