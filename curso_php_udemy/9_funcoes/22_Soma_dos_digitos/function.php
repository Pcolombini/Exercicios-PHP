<?php 

$numero = filter_var($_GET['numero'], FILTER_SANITIZE_NUMBER_INT);

// var_dump($numero);

function sumDigits($num) 
{
    if (isset($num)) {
        $num = str_split($num);
        return array_sum($num);
    } else {
    return $num;
    }
}

$soma = sumDigits($numero);

echo($soma);