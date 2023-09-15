<?php 

// NO PHP TEMOS DUAS FUNÇÕES QUE RETORNAM INFORMAÇÕES SOBRE OS ARGUMENTOS DAS FUNÇÕES

    echo "<code>func_get_args();</code><br>"; // RETORNA A LISTA COM OS ARGUMENTOS DE UMA FUNÇÃO
    echo"<code>func_num_args();</code><br>"; // RETORNA O NÚMERO DE ARGUMENTOS DE UMA FUNÇÃO

function somar($a , $b) 
{
    print_r(func_get_args());

    echo "<br>";

    echo func_num_args()."<br>";

    return $a + $b;
}

somar(3,6);