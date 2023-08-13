<?php 

$count = 4;

while ($count < 30) {
    echo "Contador em: $count<br>";
    if ($count === 24) {
        break;
    } 
    
    $count += 2;
}