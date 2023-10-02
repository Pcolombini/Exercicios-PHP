<?php 

$arr = array(
    'civic' => 10,
    'gol' => 8,
    'bmw' => 15,
    'mustang' => 25
); 
function itens(array $arr)
{
    $arr_itens = [];

    foreach($arr as $item => $preco) {
        if ($preco > 10) {
            array_push($arr_itens, $item);
        }
    }

    return $arr_itens;
}
