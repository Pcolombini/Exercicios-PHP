<?php

$cont = 0;

while ($cont <= 10) {
    echo "O contador está em $cont <br>";
    if ($cont === 5) {
        echo "Terminando a contagem!<br>";
        break;
    }
    $cont++;
}

echo "Saiu do loop";