<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Calculadora de pães</title>
</head>
<body>
    <div class="container ">
        <p>
            Faça um algoritmo que solicite a quantidade de pães e de leite e exiba o total a pagar . Considere que cada pão custa 0.40 e que o leite custa 2.00
        </p>

        <form method="get">
            <label for="qtd-pao">Digite a quantidade de Pão</label>
            <input type="number" name="qtd-pao">
            <label for="qtd-leite">Digite a quantidade de Leite</label>
            <input type="number" name="qtd-leite">

            <button>Calcular</button>
        </form>

    </div>
</body>
</html>

<?php 
if(isset($_GET['qtd-pao']) && isset($_GET['qtd-leite'])){
    $qtd_pao = $_GET['qtd-pao'];
    $qtd_leite = $_GET['qtd-leite'];

    $total = $qtd_pao * 0.40;
    $total_leite = $qtd_leite * 2 ;

    echo"<h3>Total comprado $qtd_pao e total ser a pago de pão sera : $total</h3>";
    echo"<h3>Total comprado $qtd_leite e total ser a pago de Leite sera : $total_leite</h3>";
}