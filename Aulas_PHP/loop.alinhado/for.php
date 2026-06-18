<?php
$j = 0;
$nome = "Isabella Vieira";
for ($i = 0; $i<10;$i++){
    if ($i == 4){
        echo "$nome";
    }
    if ($i == 8){
        break;
    }
    echo "testando for $i"; 
}
?>