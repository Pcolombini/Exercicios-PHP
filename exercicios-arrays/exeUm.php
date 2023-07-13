<?php

$numeroUm = readline("Digite o primeiro número: ");
$numeroDois = readline("Digite o segundo número: ");

$soma = $numeroUm + $numeroDois;

if ($soma > 20) {
    $soma += 8;
} else {
    $soma -= 5;
}

echo PHP_EOL;
echo $soma;


?>