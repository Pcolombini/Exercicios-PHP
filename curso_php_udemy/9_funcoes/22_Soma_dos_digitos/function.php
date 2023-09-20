<?php 

function sumDigits($num) 
{
    if (isset($num)) {
        $num = str_split($num);
        return array_sum($num);
    } else {
    return $num;
    }
}

$soma = sumDigits($_GET['numero']);

echo($soma);