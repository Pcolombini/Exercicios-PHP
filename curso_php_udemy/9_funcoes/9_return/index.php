<?php 

function soma($n1, $n2)
{
    return $n1 + $n2;
}

echo soma(5,5)."<br>";

$x = soma(2,4);

echo "$x<br>";

$y = soma($x,51);

echo "$y<br>";

function testandoRetorno()
{
    return "String vinda do return da função e que pode ser usada em qualquer parte do código";
}

$b = testandoRetorno();

echo "$b <br>";