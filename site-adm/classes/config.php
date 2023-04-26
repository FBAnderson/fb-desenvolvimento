<?php

$dbHost = "Localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "fbsdb";


$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($conexao->connect_errno){
    echo "Erro de conexão da base de dados";
}
else
{
   
}






?>