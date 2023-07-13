<?php

/*
Escreva um programa que peça ao usuário para digitar um número e verifique se o número é um palíndromo (ou seja, se ele é igual quando lido de trás para frente)
*/

print_r("Digite um número a partir de 100".PHP_EOL);

try {
  $n = fgets(STDIN);
  $numero = intval(trim($n));

  if (!filter_var($numero,FILTER_VALIDATE_INT)|| $numero < 100) {
    throw new Exception("Digite um número válido maior que 100\n");
  }
  
} catch (Exception $e) {
  echo "erro...".PHP_EOL.$e -> getMessage();
}

echo "\nVocê digitou o número $numero\n";

$palindromo = explode(" ",$numero);
$dados = array();

foreach ($palindromo as $value) {
  if (is_numeric($value)) {
    $dados [] = $value;
  }
}

