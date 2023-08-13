<?php 

$array = [
    "Paschoal",
    1.8,
    32,
    true,
    "Castanho",
    true,
    true,
    "Cate",
    false,
    2
];

// DEFINIU O TAMANHO PARA O ARRAY
$x = count($array);

// CRIOU O CONTADOR PARA PASSAR NO WHILE
$y = 0;

// COMPARA O CONTADOR COM O TAMANHO DO ARRAY
while ($y < $x) {
    // COMPARA O QUE É TIPO STRING NO ARRAY
    if (is_string($array[$y])) {
        //IMPRIME O QUE FOR STRING
        echo $array[$y]."<br>";
    }
    //INCREMENTA
    $y++;
}