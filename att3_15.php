<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>PHP Test</title>
    <meta charset="utf-8">
  </head>
  <body>
    <form method="get">
      <label>Informe a cor</label>
      <input type="text" name="cor" id="cor">
      <br><br>
      <label>Informe os números</label>
      <input type="text" name="num" id="numjs">
      <input type="submit">
    </form>
   
    <?php 

      $cor = $_GET['cor'];

      if ($cor == "azul"){
        echo "A cor é azul";
      }elseif($cor == "amarelo"){
        echo "A cor é amarelo";
      }else{
        echo "A cor é inválida";
      }
    
    ?> 
 
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>
