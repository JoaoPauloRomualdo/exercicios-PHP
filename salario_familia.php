<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Formulario</title>
</head>
<body>
    <div class="container">
        <p>
            Enunciado:Faça um algoritmo que solicite o numero de filhos de um funcionario e exiba o valor do salario familia . Sabe-se que para cada filho é pago 23.40
        </p>
        
        <form action="#" method="POST">
            <h2>Salario Familia</h2>
            <label for="filhos">Digite quantos filhos você tem :</label>
            <input type="number" name="filhos">
            <button>Calcular</button>
        </form>
    </div>
</body>
</html>

<?php




if(isset($_POST['filhos'])){

    $numero_filho = $_POST["filhos"];

    $salario_familia = $numero_filho * 23.40;
    $numero_formatado = number_format($salario_familia,2 ,',', '.');

    echo "<h3>Quantidade de filhos informado e de : {$numero_filho}, valor total do salário familia sera de R$ $numero_formatado </h3>";
} else {
    echo"Por Favor informe a quantidade de filhos";
}
