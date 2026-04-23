<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercícios op</title>
</head>
<body>
<?php

$a = 5;
$b = 10;

echo "resultados";

echo "Igualdade ($a == $b): " 
 ($a == $b ? "true" : "false");

// 3. Teste de Diferença
echo "Diferença ($a != $b): " 
 ($a != $b ? "true" : "false");

// 4. Teste de Idêntico (Mesmo valor e mesmo tipo)
echo "Idêntico ($a === $b): " 
 ($a === $b ? "true" : "false");

// 5. Teste de Não Idêntico
echo "Não Idêntico ($a !== $b): " 
 ($a !== $b ? "true" : "false");
?>
</body>
</html>