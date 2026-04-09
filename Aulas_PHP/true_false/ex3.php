<?php

# criando variáveis
$a = 10;
$b = "10";
$c = 20;

# usando o !=
# compara apenas o valor (ignora o tipo)

if ($a != $b) {
    echo "a é diferente de b usando !=\n";
} else {
    echo "a NÃO é diferente de b usando !=\n";
}

if ($a != $c) {
    echo "a é diferente de c usando !=\n";
}

# usando o <>
# o operador <> funciona exatamente como o !=

if ($a <> $b) {
    echo "a é diferente de b usando <>\n";
} else {
    echo "a NÃO é diferente de b usando <>\n";
}

# usando o !==
# compara valor E tipo

if ($a !== $b) {
    echo "a é diferente de b usando !== (tipo diferente)\n";
}

# outro exemplo
$x = 0;
$y = "0";

# usando !=
if ($x != $y) {
    echo "x é diferente de y usando !=\n";
} else {
    echo "x NÃO é diferente de y usando !=\n";
}

# usando !==
if ($x !== $y) {
    echo "x é diferente de y usando !== (tipos diferentes)\n";
}

# resumo
# !=  -> só valor
# <>  -> mesma coisa que !=
# !== -> valor + tipo

?>