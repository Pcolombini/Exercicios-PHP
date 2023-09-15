<?php 

// funcção para receber o parametro de texto
function countVowels($texto)
{
    // criar um arrai com as vogais
    $vogais = ['a','á','ã','à','e','é','ê','i','í','o','ó','õ','u','ú','A','Á','Ã','À','E','É','Ê','I','Í','O','Ó','Õ','U','Ú'];

    // contador vázio
    $contador = 0;

    // PERCORRENDO AS VOGAIS DO STRING PASSADA
    for ($i = 0; $i < strlen($texto); $i++) {

        // salvando o texto em uma variável
        $totalVogais = $texto[$i];

        if (in_array($totalVogais, $vogais)) {

            $contador++;

        }
    }

    return $contador;
}