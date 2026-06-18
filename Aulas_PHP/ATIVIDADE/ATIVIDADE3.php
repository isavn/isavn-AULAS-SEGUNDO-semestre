// criar um array de 10 e 20 com for 
fazer loop em cima do array criado dinamicamente 
imprimindo apenas numero impares

<?php
$numeros = [];
for ($i = 10; $i<= 20; $i++){
    $numeros[] = $i;
$total = count($numeros);
for ($i = 0; $i < $total; $i++){
    if ($numeros[$i] % 2 != 0){
echo $numeros[$i]." ";
    }
}
}
?>