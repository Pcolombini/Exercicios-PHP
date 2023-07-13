<?php

echo ("Digite um número: ");
$numero = trim(fgets(STDIN));
$numInt = intval($numero);

$is_prime = true;

if ($numInt == 1) {
    $is_prime = false;
} else {
    for ($i = 2; $i <= sqrt($numInt); $i++) {
        if ($numInt % $i == 0) {
            $is_prime = false;
            break;
        }
    }
}

if ($is_prime) {
    echo ("O número $numInt é primo!\n");
} else {
    echo ("O número $numInt não é primo!\n");
}
