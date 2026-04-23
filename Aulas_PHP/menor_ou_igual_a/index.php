<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Comparação</title>
</head>
<body>
    <?php
    if(4 > 12){
        echo "a e maior q B <br>";
    }

    if(24 > 12){
        echo "b e maior q a <br>";
    }

    if(12 <= 12){
        echo "d e maior ou igual a c <br>";
    }

    $a = 5;
    $b = 18;

    if($a > $b){
        echo "B e menor q A <br>";
    }
    
    if($b > $a){
        echo "A é menor q B <br>";
    }
    
    // Corrigido de $B para $b
    if($b <= 42){
        echo "B é menor ou igual a 42 <br>";
    }
    ?> 
</body>
</html>