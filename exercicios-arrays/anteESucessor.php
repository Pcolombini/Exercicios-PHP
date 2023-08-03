<?php
 //Escreva um algoritmo para mostrar o sucessor e o antecessor de um número qualquer.
 
// PEGANDO O NÚMERO 
echo "Digite um número: ";
$n = fgets(STDIN);
echo "\n";

// FUNÇÃO RETORNA O SUCESSOR
function sucessor($n){
  return $n + 1;
}

// FUNÇÃO RETORNA O ANTECESSOR
function antecessor($n){
  return $n - 1;
}

// PRINTA OS RESULTADO
echo "O número informado é $n \n";
echo "O sucessor é ".sucessor($n)."\n";
echo "O antecessor é ".antecessor($n)."\n";