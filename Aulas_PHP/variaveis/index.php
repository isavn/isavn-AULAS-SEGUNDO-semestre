<?php

/* No PHP, por padrão as variaveis não passadas por referencia. Se voce atribui uma variavel 
a outra, o PHP cria uma copia do valor. Para usar referencia, utilizamos o operador &.
Quando vc usa o &, vc nao esta criando uma copia voce esta criando um "apelido". 
Ambas as variaveis passam a apontar para o mesmo conteudo na memoria.*/

$a = 10;
$b = &$a;  // $b agora e uma referencia para $a


$b = 20;   // alterando $b










?>