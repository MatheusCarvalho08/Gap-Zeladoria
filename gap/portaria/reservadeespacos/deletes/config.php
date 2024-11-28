<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'gap';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

//if($conexao->connect_errno)
//{
//    echo "erro";
//}
//else
//{
//echo "Conexão efetuada com sucesso";
//}
?>

<!-- Aqui fizemos a Conexão com o nosso Banco de dados, cujo o nome é formulario. -->