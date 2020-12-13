<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Mod 4</title>
</head>
<body>
    <div class="container">
        <p>
            Faça um algoritmo que solicite um número , e exiba o resto da divisão deste numero por 4
        </p>

        <form method="get">
            <label for="numero">Informe um numero</label>
            <input type="number" name="numero">

            <button>Calcular</button>
        </form>
    </div>
</body>
</html>

<?php 

if(isset($_GET['numero'])){
    $numero = $_GET['numero'];

    if($numero >= 1){
        $mod = $numero % 4;
        $resultado = $numero / 4;

        echo "<h3>$numero / 4 o resto da divisão sera = $mod</h3>";
        echo "<h3>O resultado da divisão de $numero / 4 = $resultado</h3>";
    } else {
        echo "<h3>Por favo informe um numero maior que zero !!! </h3>";
    }

}