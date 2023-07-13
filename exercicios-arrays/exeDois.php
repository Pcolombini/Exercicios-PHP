<?php

echo "Entre com um número! ";
$numero = readline("");

$modulo10 = $numero % 10;
$modulo5 = $numero %  5;
$modulo2 = $numero % 2;

if ($modulo10 == 0 and $modulo5 == 0 and $modulo2 == 0) {
    echo "O número digitado é divisível por 10, 5 e 2";
} elseif ($modulo10 != 0 and $modulo5 == 0 and $modulo2 != 0) {
    echo "O número digitado é divisível por 5";
} elseif ($modulo10 == 0 and $modulo5 != 0 and $modulo2 == 0) {
    echo "O número digitado é divisível por 10 e 2";
} elseif ($modulo10 != 0 and $modulo5 != 0 and $modulo2 == 0) {
    echo "O número digitado é divisível por 2";
} else {
    echo "Número não divisível por 10, 5 e 2";
}
