<?php 

/**@
 * Crie uma função chamada sumEvenNumbers que recebe um número inteiro positivo como parâmetro.

A função deve retornar a soma de todos os números pares de 1 até o número fornecido, inclusive.

Utilize uma estrutura de repetição para percorrer os números e uma variável para acumular a soma.
 */

 function sumEvenNumbers($num) 
 {
    
    $sum = 0;

    for ($i = 1; $i <= $num; $i++) {

        if ($i % 2 === 0) {

            $sum += $i;

        }
    }

    return $sum;
 }

 echo sumEvenNumbers(12);

// function sumEvenNumbers($n) {
//     $sum = 0;

//     for ($i = 1; $i <= $n; $i++) {
//         if ($i % 2 === 0) {
//             $sum += $i;
//         }
//     }

//     return $sum;
// }

// // Exemplo de uso
// $numeroFornecido = 151;  // Altere este valor conforme necessário
// $resultado = sumEvenNumbers($numeroFornecido);
// echo "A soma dos números pares até $numeroFornecido é: $resultado";
