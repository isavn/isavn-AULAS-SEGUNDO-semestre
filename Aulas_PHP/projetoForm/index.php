<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulário</title>
</head>
<body>
    <form action="home.php" method="get">
        Digite algo: <input type="text" name="fomulario"><br>
    </form>
    <?php
    if (isset($_GET["formulario"])){
        echo "Você digitou".$_GET["fomulario"]."<br>";

    }
    
    ?>
</body>
</html>