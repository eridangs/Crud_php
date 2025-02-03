<?php

$conn = new mysqli('localhost', 'root', '', 'crud_basic');

if (!$conn) {
    die(mysqli_error($conn));
};
?>

<!-- // $hostname = 'localhost';  // ip d maquina
// $username = 'root'; // nome
// $password = ''; //nao tem senha
// $db = 'crud_basic'; // nome do banco de dados

// $conn = new mysqli($hostname, $username, $password, $db);


// modo para conectar ao banco e garantir que não deu erro -->