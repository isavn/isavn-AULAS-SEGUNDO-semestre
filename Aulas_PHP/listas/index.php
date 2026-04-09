<?php
$carros = array("Volvo", "BMW", "Toyota");
echo "<br>";
echo count($carros);
echo "<br>";
print_r($carros);
echo "<br>";

$frutas = ["Banana","Maçã","Pêra","Laranja"];
echo "<br>";
echo count($frutas);
echo "<br>";
print_r($frutas);
echo "<br>";

$dadosMatricula = ["aluno"=>"Priscila", "matricula"=>"12345", "conclusao"=>2026];
echo "<br>";
echo $dadosMatricula["matricula"];
echo "<br>";
print_r($dadosMatricula);
echo "<br>";

$esporte = ["Futebol", "Vôlei","Tênis","Basquete","Corrida","Musculação","Natação"];
echo "<br>";
echo $esporte[3];
echo "<br>";
print_r($esporte);
echo "<br>";

$caracteristicasPessoa = ["nome"=>"Priscila", "idade"=>28, "raça"=>"parda", "nascionalidade"=>"professora"];
echo "<br>";
echo $caracteristicasPessoa["nome"];
echo "<br>";
print_r($caracteristicasPessoa);
echo "<br>";
?>