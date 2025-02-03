<?php
include './DB/connect.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <header>
        <ul style="list-style: none;">
            <li><a class="dropdown-item" href="index.php">CADASTRAR</a></li>
            <li><a class="dropdown-item" href="listar.php">LISTAR</a></li>
        </ul>    
    </header>
    
    <h1>Cadastro de Cliente</h1>
    
    <div class="p-5 d-flex align-items-center bg-primary text-white rounded">
        <form method="POST" action="cadastra_cli.php">
            <h4>NOME</h4>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome: ">
            <h4>CPF</h4>            
            <input type="text" name="cpf" id="cpf" placeholder="Digite seu cpf: ">
            <h4>TELEFONE</h4>            
            <input type="text" name="telefone" id="telefone" placeholder="Digite seu telefone: ">
            <h4>EMAIL</h4>            
            <input type="email" name="email" id="email" placeholder="Digite seu email: ">
            <h4>SENHA</h4>            
            <input type="password" name="pass" id="pass" placeholder="Digite sua senha: " >
            <h4>CONFIRME A SENHA</h4>           
            <input type="password" name="conf_pass" id="conf_pass" placeholder="Confirme sua senha: " >

            <button class="btn btn-success" type="submit" name="cadastrar" id="bot" value="cadastrar">CADASTRAR</button>
        </form>
    </div>
    
</body>
</html>