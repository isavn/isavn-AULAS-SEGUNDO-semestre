<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?
  $j = 0;
  $testes = "Andre";
  do{
   echo "testando o while $j";
   if ($j ==2){
    echo "$testes";
   }
   $j++;

  }while($j<10);
  $i = 10;
  do {
    echo "testando while 2 $i";
    if ($i == 2){
        echo "$testes";
    }
    $i--;
  }while ($i>0);
  ?>
</body>
</html>

