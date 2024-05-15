<?php
/*if(isset($_POST['submit'])){
    print_r('Nome: '.$_POST['nome']);
    print_r('<br>');
    print_r('Email: '.$_POST['email']);
    print_r('<br>');
    print_r('Telefone: '.$_POST['telefone']);
    print_r('<br>');
    print_r('Data: '.$_POST['datan']);
    print_r('<br>');
    print_r('Cidade: '.$_POST['cidade']);
    print_r('<br>');
  
  }
  */
?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Um formulário bem daora</title>

    <style>

      body{
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      
      form{
        flex-direction: column;
        font-family: Arial, Helvetica, sans-serif;
        width: 300px;
        display: flex;
        justify-content: center;  
      }

      h1{
        font-family: Arial;
      }

      label{
        display: flex;
        align-self: left;

      }

      input{
        width: 200px;
        display: flex;
        align-self: left;
        margin-bottom: 30px;
      }
      
    </style>

    
  </head>

  <body>

    <h1>FAÇA SEU CADASTRO</h1>

    <form action= "cadastro.php" method="POST">

      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="nome"> 

      <label>Email</label>
      <input type="email" name="email" id="email">

      <label>Telefone</label>
      <input type="tel" name="telefone" id="telefone">

      <label>Data de nascimento</label>
      <input type="date" name="datan" id="datan">

      <label>Cidade</label>
      <input type="text" name="cidade" id="cidade">

      <input type="submit" name="submit" id="submit" value="Enviar">
      
    </form>
    
  </body>
  
</html>