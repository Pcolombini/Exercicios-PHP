<?php 

// DEFINIÇÃO DO CONTADOR
$contador = 0;

// INÍCIO DO WHILE
while ($contador < 10) {
    // EXECUTA O CORPO
    echo $contador."\n";
    
    // INCREMENTO
    $contador++;
}

echo "Continuação\n";

$y = 0;

while ($y <= 10) {
    echo $y."\n";
    $y += 2;
}

echo "Continuação\n";

$z = 10;

while ($z > 0) {
    if ($z % 2 != 0) {
        echo $z."\n";
    }
    $z--;
}