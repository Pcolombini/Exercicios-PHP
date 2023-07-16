<?php 

/**
 * Comparação de Números
 * Escreva uma função chamada compararNumeros que recebe dois números inteiros como parâmetros.

 * A função deve comparar os dois números e retornar uma string indicando qual número é maior ou se são iguais.

 * Considere as seguintes condições:

 * Se o primeiro número for maior que o segundo número, retorne a string "O primeiro número é maior."

 * Se o segundo número for maior que o primeiro número, retorne a string "O segundo número é maior."

 * Se os números forem iguais, retorne a string "Os números são iguais."
 */

function compararNumeros($x,$y){
    $primeiro = "O primeiro número é maior.";
    $segundo =  "O segundo número é maior.";
    $iguais = "Os números são iguais.";

    if ($x > $y){
        return $primeiro;
    } else if($y > $x){
        return $segundo;
    } else if($x == $y){
        return $iguais;
    }
}

echo compararNumeros(2,1);