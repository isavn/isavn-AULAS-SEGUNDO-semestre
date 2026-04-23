<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Comparação PHP</title>
</head>
<body>

    <?php
    $a = 4;
    $b = 5;
    $c = 7;
    $d = 8;
    $e = 9;

    if($a > $b){
        echo "A é maior que B <br>";
    }
    if($b > $a){
        echo "B é maior que A <br>";
    }
    if($d >= $c){
        echo "D é maior ou igual a C <br>";
    }
    if($d >= $a){
        echo "D é maior ou igual a A <br>";
    }
    if($d >= $e){
       echo "D é maior ou igual a E <br>";
    }
    ?>

</body>
</html>