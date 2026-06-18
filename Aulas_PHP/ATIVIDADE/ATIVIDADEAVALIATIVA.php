<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numeros = range(1,20);
    $total = count ($numeros);

    for ($i = 0; $i < $total; $i++){
        if ($numeros[$i] %2==0){
            echo $numeros[$i]." ";
        }
    }

    ?>
</body>
</html>