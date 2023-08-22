<?php 

$cont = 0;

while ($cont < 10) {
    echo "Loop externo $cont<br>";
    $cont++;

    $contInter = 0;

    while ($contInter < 4) {
        echo "Loop interno $contInter<br>";
        $contInter++;
    }
}