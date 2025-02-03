<?php
    // conectar ao banco
    include './DB/connect.php';

    // receber o id via get
    if(isset($_GET['id'])){
        $id_recebido = $_GET['id'];
        
        // selecionar o cliente pelo id

        $sql = "SELECT * FROM cliente WHERE id = $id_recebido";
        $result = mysqli_query($conn,$sql);

        $cliente = mysqli_fetch_assoc($result);

        // var_dump($cliente);
        // echo $cliente['nome'];
    }else{
        header('location:index.php');
    }

    if(isset($_POST['editar'])){

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $fone = $_POST['telefone'];
        $email = $_POST['email'];

        // echo' Dados recebidos via POST';
        echo $nome,' ', $email,' ', $cpf,' ', $fone;

        $sql_update = "UPDATE cliente SET nome = '$nome', cpf = '$cpf', fone = '$fone', email = '$email' WHERE id = $id_recebido ";
        $result_update = mysqli_query($conn,$sql_update);

        if($result_update){
            echo '<script> alert("Atualizado com sucesso")</script>';
        }else{
            echo '<script> alert("Erro")</script>';
        }

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header>
        <ul style="list-style: none;">
            <li><a class="dropdown-item" href="index.php">CADASTRAR</a></li>
            <li><a class="dropdown-item" href="listar.php">LISTAR</a></li>
        </ul>   
    </header>

    <h1>Editar Cliente</h1>

    <form method="POST">
        <div class="mb-3">
            <label class="form-label">NOME</label>
            <input type="text" name="nome" id="nome" value="<?php echo $cliente['nome'];?>">
        </div>
        <div class="mb-3 row g-0">
            <div class="col-sm-3 mx-1 col-md-3">
                <label class="form-label">CPF</label>
                <input type="text" name="cpf" id="cpf" value="<?php echo $cliente['cpf'];?>"> 
            </div>
            <div class="col-sm-3 mx-1 col-md-3">
                <label class="form-label">TELEFONE</label>
                <input type="text" name="telefone" id="telefone" value="<?php echo $cliente['fone'];?>">
            </div>
            <div class="col-sm-3 mx-1 col-md-5">                
                <label class="form-label">EMAIL</label>
                <input type="email" name="email" id="email" value="<?php echo $cliente['email'];?>">
            </div>                        
        </div>
        <button class="btn btn-danger" type="reset" name="cancelar">Cancelar</button>
        <button class="btn btn-primary" type="submit" name="editar">Editar</button>
    </form>

</body>
</html>