<?php

# ORDENA EM ORDEM DECRESCENTE

$numb = fgets(STDIN);
$numero = explode(" ",$numb);

foreach ($numero as $valor)
print_r($valor.PHP_EOL);

rsort($numero);

print_r($numero);