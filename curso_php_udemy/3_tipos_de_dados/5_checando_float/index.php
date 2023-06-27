<?php 
$texto = "String";
$f = 3.1;


if(is_float($f)){
    echo("Verdadeiro 1");
}

if(is_float($texto)){
    echo("<br>Verdadeiro 2");
}

if(is_float(12.234)){
    echo("<br>Verdadeiro 3");
}

if(is_float("teste")){
    echo("Verdadeiro<br>4");
}
?>