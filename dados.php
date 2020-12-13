<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados em tela</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <div class="container">
        <p>
            Faça um algoritmo que solicite o sexo (F ou M), nome e idade de uma pessoa e exiba estes dados na tela
        </p>
        <form method="get">
            <label for="nome">Digite seu nome</label>
            <input type="text" name="nome">
            <label for="idade">Digite sua Idade</label>
            <input type="number" name="idade">
            <div class="sexo">
                <label for="masculino">Masculino</label>
                <input type="radio" name="sexo" value="masculino">
                <label for="feminino">Feminino</label>
                <input type="radio" name="sexo" value="feminino">
            </div>
            <button>Enviar Dados</button>
        </form>
    </div>


</body>
</html>

<?php
if(isset($_GET['nome'])){
    $nome_user = $_GET['nome'];
    $idade_user = $_GET['idade'];
    $sexo_user = $_GET['sexo'];
    
    echo"<h3>Seu nome e : $nome_user você tem $idade_user anos e seu sexo é $sexo_user </h3>";
}

?>