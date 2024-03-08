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
  
// PHP code to illustrate the working 
// of intdiv() Functions 
  
$dividend = $_GET["did"];;
$divisor = $_GET["div"];; 
  
echo intdiv($dividend, $divisor);
  
?>

<br>
    <a href="http://localhost/http/Attfuncoes/index.html">voltar</a>

</body>
</html>