<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="calculadora.php" method="get">
        <label for="num1">Número 1: </label>
        <input type="number" name="num1" id="num1" required><br>

        <label for="num2">Número 2: </label>
        <input type="number" name="num2" id="num2" required><br>

        <button type="submit">Calcular</button>
    </form>

    <hr>

    <?php
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        echo "<h3>Resultados: </h3";
        echo "Adição: $num1 + $num2 = ".($num1 + $num2)."<br>";
        echo "Subtração: $num1 - $num2 = ".($num1 - $num2)."<br>";
        echo "Mutiplicação: $num1 * $num2 = ".($num1 * $num2)."<br>";

        if ($num2 != 0) {
            echo "Divisão: $num1 / $num2 =  ".($num1 / $num2)."<br>";
            echo "Resto da divisão: $num1 % $num2 = ".($num1 % $num2).'<br>';
        } else {
            echo "Divisão não é possível dividir por zero.<br>";
        }
    } 
    ?>
    
</body>
</html>