<?php
$dbhost ='localhost';
$user='root';
$senha='';
$db='formulariophp';

$con = new mysqli($dbhost, $user, $senha, $db);
if($con->connect_errno)
{
    echo "erro" ;
}
else
{
    echo"conexao OKAY";
}
?>