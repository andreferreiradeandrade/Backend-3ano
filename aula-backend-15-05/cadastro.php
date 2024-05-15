<?php
if(isset($_POST['submit'])){
    include_once('conexao.php');

    $nome =$_POST['nome'];
    $email =$_POST['email'];
    $telefone =$_POST['telefone'];
    $datan =$_POST['datan'];
    $cidade =$_POST['cidade'];

    $result = mysqli_query($con, "INSERT INTO usuarios(nome, email, telefone, datan, cidade) values ('$nome', '$email', '$telefone', '$datan', '$cidade')");

    echo('cadastrado com sucesso');
}
?>