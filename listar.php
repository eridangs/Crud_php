<?php

    include './DB/connect.php';

    //Monta a query de consulta em sql
    $sql = "SELECT * FROM cliente";
    $result = mysqli_query($conn,$sql);

    // var_dump($result);

    $linhas = mysqli_num_rows($result);
    // echo $linhas;

    // $dado= mysqli_fetch_assoc($result);
    // print_r($dado);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header>
        <ul style="list-style: none;">
            <li><a class="dropdown-item" href="index.php">CADASTRAR</a></li>
            <li><a class="dropdown-item" href="listar.php">LISTAR</a></li>
        </ul>    
    </header>
    <h1>Clientes Cadastrados</h1>
    
    <table class="table table-striped">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>CPF</td>
            <td>Telefone</td>
            <td>Email</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>
        <?php
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $nome = $row['nome'];
                    $cpf = $row['cpf'];
                    $fone = $row['fone'];
                    $email = $row['email'];

                    // echo $id . ' '. $nome. ' '. $cpf. ' '. '<br>';
                    echo '
                        <tr>
                            
                            <td>'.$id.' </td>
                            <td>'.$nome.'</td>
                            <td>'.$cpf.'</td>
                            <td>'.$fone.'</td>
                            <td>'.$email.'</td>
                            <td><a href="editar_cli.php?id='.$id.'">Editar</a></td>
                            <td><a href="excluir_cliente.php?id='.$id.'">Excluir</a></td>
                        </tr>            
                    ';
                }
            }

        ?>
    </table>
    
</body>
</html>