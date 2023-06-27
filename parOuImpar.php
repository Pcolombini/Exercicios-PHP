<?php

/**
 * Escreva um programa que peça ao usuário para digitar um número e verifique se o número é par ou ímpar.
 */

echo("Olá, vamos verificar se o número digitado é par ou ímpar".PHP_EOL);

echo ("Digite o Número: \n");

try {
$number = fgets(STDIN);
$numero = intval(trim($number));
    if (!filter_var($numero, FILTER_VALIDATE_INT)||$numero <= 0){
        throw new Exception("Digite um número inteiro e positivo válido!".PHP_EOL);
    }
} catch (Exception $e) {
    echo "Erro... ".$e -> getMessage().PHP_EOL;
    exit(1);
}

function modulo($x){
  return $x % 2;
}

$convert = modulo($numero);

/*if ($convert == 0) {
  echo PHP_EOL.("Número digitado é Par!").PHP_EOL;
} else {
  echo PHP_EOL.("Número digitado é Ímpar!").PHP_EOL;
} */

echo PHP_EOL.$convert == 0 ? "Número digitado é Par!" : "Número digitado é Ímpar!".PHP_EOL;

?>