<?php

function adicionarBonus(&$salario) {
    $salario += 500;
}

$meuSalario = 3000;

adicionarBonus($meuSalario);

echo "Novo salário: ". $meuSalario;

?>