<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $arr = [10, 20, 30, 40, 50, 607, 80, 900]; 
    $i = 0;
    
   
    while ($i < count($arr)) { 
        $numeroAtual = $arr[$i];
        
       
        if ($numeroAtual == 30 || $numeroAtual == 40) {
            echo "Encontrei o número: $numeroAtual <br>";
        }
        
        $i++; 
    }
    ?>
</body>
</html>