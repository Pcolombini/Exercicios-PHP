<?php

# ORDENA EM ORDEM CRESCENTE

$numb = fgets(STDIN);
$numero = explode(" ",$numb);

foreach ($numero as $valor)
print_r($valor);

sort($numero);

print_r($numero);