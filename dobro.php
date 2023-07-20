<?php 

// Faça uma função para calcular o dobro de um número qualquer.

// RECEBENDO O NÚMERO
echo("Digite um número: ");
$n = intval(trim(fgets(STDIN)));

// RETORNANDO O DOBRO DO NÚMERO
function dobro($n){
  return $n * 2;
}

// IMPRIMINDO O RESULTADO
echo("O dobro do número $n é ").dobro($n);