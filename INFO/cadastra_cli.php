<?php

include("./DB/connect.php");
// var_dump($_POST);
if(isset( $_POST['cadastrar']));
echo '<br>';
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$fone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['pass'];
$senha2 = $_POST['conf_pass'];

$sql = "INSERT INTO cliente(nome,cpf,fone,email) VALUES('$nome','$cpf','$fone','$email')";

$result = mysqli_query($conn,$sql);

if($result){
    echo 'Cadastrado com sucesso';
}else{
    echo 'Erro ao cadastrar';
}
?>