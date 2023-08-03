<?php

/**
 * Sabendo que a área quadrada é dada pela multiplicação dos lados, escreva um algoritmo que mostre a área quadrada de um espaço qualquer.
 */ 

/**
 * Função retorna o calculo da area do quadrado.
 */

function quadrado($l,$h){
  $areaQ = $l * $h;
  if (!empty($l) and !empty($h)){
    echo $areaQ;
  }
}
echo "Digite o tamanho do lado ";
$lado = trim(fgets(STDIN));
echo PHP_EOL;
echo "Digite o tamanho da altura ";
$altura = trim(fgets(STDIN));
echo PHP_EOL;

echo "A área do quadrado é: ";
quadrado($lado,$altura);
PHP_EOL;