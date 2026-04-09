<?php
if (isset($_post['ingrediente'])){

    $ingrediente = $_POST['ingredientes'];
    print_r("ingredientes");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ingrediente</title>
</head>
<body>
<form action="index.php" method = "post">
<div>
    <input type="checkbox" name ="ingredientes"  value="tomate">
</div>
<div>
    <input type="checkbox" name ="ingredientes"  value="tomate">
</div>
<div>
    <input type="checkbox" name ="ingredientes"  value="abobora">
</div>
<div>
    <input type="checkbox" name ="ingredientes"  value="pepino">
</div>
<div>
    <input type="checkbox" name ="ingredientes"  value="alface">
</div>
<div>
    <input type="checkbox" name ="ingredientes"  value="cebola">
</div>
    </form>
</body>
</html>