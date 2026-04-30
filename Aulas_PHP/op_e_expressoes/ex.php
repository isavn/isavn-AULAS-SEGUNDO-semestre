<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercício and </title>
</head>
<body>
    <?php
    if(5 > 2 || 3 < 4){
        echo "A operação 1 é verdadeira"
    }
    if(5 > 2 || 30 < 4){
        echo "A operação 2 é verdadeira"
    }

     if(5 > 20 || 3 < 4){
        echo "A operação 3 é verdadeira"
    }
     if(5 > 20 || 30 < 4){
        echo "A operação 4 é verdadeira"
    }
    if(5 > 20 || 30 < 4){
        echo "A operação 5 é verdadeira"
    }


    $a = 10; 
    $b = 20;
    $c = 30;
    $d = 40;
    
    if ($a > $b || $d > $c){
        echo "operação 5 é verdadeira <br>"
    }
    if (($a > $b || $d > $c)&& $c $d){
        echo "operação 8 é verdadeira <br>"
    }
    
    if (($a > $b && $d > $c)|| $c $d){
        echo "operação 8 é verdadeira <br>"
    }
    if (($a > $b || $d > $c)&& $c $d){
        echo "operação 8 é verdadeira <br>"
    }
    




</body>
</html>