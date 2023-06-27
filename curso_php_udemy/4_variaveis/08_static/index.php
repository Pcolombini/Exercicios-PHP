<?php 

function teste(){
    $a = 0;
    $a++;
    echo "$a<br>";
}

teste();
teste();
teste();


function testeStatic(){
    static $a = 0;
    // matém o valor e é incrementado dois da primeira chamada, da segunda e assim por diante
    $a++;
    echo "$a<br>";
}

testeStatic();
testeStatic();
testeStatic();