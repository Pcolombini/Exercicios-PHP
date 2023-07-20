<?php

/**
 * Escreva uma função para cada uma das quatro operações matemáticas simples:
* adição,
* subtração,
* multiplicação e
* dividisão
*/

// PEGANDO DADOS PARA AS OPERAÇÕES
echo("Digite um número, verá as operações aritiméticas!\n");
$n = intval(trim(fgets(STDIN)));

// FUNÇÃO DE ADIÇÃO
function adicao($a){
  return $a + $a;
}

// FUNÇÃO DE SUBTRAÇÃO
function subtracao($b){
  return $b - $b;
}

// FUNÇÃO DE DIVISÃO
function divisao($c){
  return (int) $c / 20;
}

// FUNÇÃO DE MULTIPLICAÇÃO
function multiplicacao($d){
  return $d * $d;
}

echo("Número $n + número $n ".adicao($n))."\n";
echo("Número $n - número $n ".subtracao($n))."\n";
echo("Número $n / número 20 ".divisao($n))."\n";
echo("Número $n * número $n ".multiplicacao($n))."\n";