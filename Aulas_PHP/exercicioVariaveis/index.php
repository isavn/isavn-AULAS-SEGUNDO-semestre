<?php
//String
$texto = "Texto";

echo "<br>";
if(is_string($texto)) {
    echo "O variável é String!";
}



echo "<br>";

//Int
$numeroInt = 10;

echo "<br>";
if(is_int($numeroInt)) {
    echo "O variável é Int!";
}
echo "<br>";
echo "<br>";
//Float
$numeroFloat= 10.00;

echo "<br>";
if(is_float($numeroFloat)) {
    echo "O variável é Float!";
}

echo "<br>";    


//Double
$numeroDouble= 10.00;

echo "<br>";
if(is_double($numeroDouble)) {
    echo "O variável é Double!";
}
echo "<br>";

echo "<br>";
//Boolean
$ativo = true;
$inativo = false;

if(is_bool($ativo && $inativo)) {
    echo "A variável é Boolean!";
}

echo "<br>";
echo "<br>";


//Array
$coresPrimarias = ["azul", "vermelho", "amarelo"];
echo "<br>";
if(is_array($coresPrimarias)) {
    echo "O variável é Array!";
}

echo "<br>";
echo "<br>";


//Null
echo NULL;

$vazio = NULL;

if(is_null($vazio)) {
    echo "A variável é Null!";
}


?>