<?php
include './DB/connect.php'; //importando o banco

$id_recebido = $_GET['id'];
var_dump($id_recebido);

if(isset($_GET['id'])){
    $id_recebido = $_GET['id'];

    $sql = "DELETE FROM cliente WHERE id = $id_recebido";
    $result = mysqli_query($conn,$sql); //conectar ao banco e mandar a sentença para o banco executar

    if($result){
        header('location:listar.php');
    }else{
        echo '<script> alert("Erro ao excluir!")</script>';
    }
}


echo'Chegou: '.$id_recebido.'';