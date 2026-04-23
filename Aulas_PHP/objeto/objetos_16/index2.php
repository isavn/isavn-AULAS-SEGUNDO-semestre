<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Voto</title>
</head>
<body>
    <?php 
    $nome = NULL;
    if (is_null($nome)){
        echo "O voto é nulo.";
        $nome = "Isabella";
    }
    if (is_null($nome)){
        echo "O voto é nulo.";
    } else {
        echo "Agora o voto é de: $nome";
    }
    ?> 
</body>
</html>