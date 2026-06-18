<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   /  <?php 
    $a = 10;
    while ($a > 0) {
        if ($a == 5 || $a == 7) {
            echo "plano de execução $a <br>"; 
            $a--; 
            continue;
        }
        if ($a == 2) {
            echo "terminamos o loop break $a <br>";
            break;
        }
        echo "Executando o loop $a <br>";
        $a--;
    }
    ?>
</body>
</html>