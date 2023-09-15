<?php 

// PARÂMETROS DEFAULT, SÃO DEFINIDOS DENTRO DO ARGUMENTO DOS PARÂMETROS

function paraDef($a = 2)
{
    // NESTA FUNÇÃO, A VARIÁVEL $a JÁ TEM UM VALOR 2 DEFINIDO

    echo $a."<br>";
}

paraDef();

// SE MAIS DE UM PARÂMETRO FOR DEFINIDO, SEMPRE COLOCAR OS PARÂMETROS DEFAULT MAIS A DIREITA

function paramDefADireita($a, $b, $c = 5)
{
    echo "prindo dos parametros, a: $a, b: $b e c: $c ";
}

paramDefADireita(2,3);