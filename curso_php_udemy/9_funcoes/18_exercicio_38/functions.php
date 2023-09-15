<?php 

$itens = [
    'Óleo',
    'Farinha',
    'Arroz',
    'Vinagre',
    'Batatas'
];

function itensSupermercado($arr)
{
    $itensMarkt = "Você levou os itens: ";

    for ($i = 0; $i < count($arr); $i++) {
        // $itensMarkt .= "$arr[$i],";

        if ($i + 1 == count($arr)) {
            $itensMarkt .= "$arr[$i].";
        } else {
            $itensMarkt .= "$arr[$i],";
        }

    }

    // $itensMarkt = implode(",", $itens);

    return $itensMarkt;
}

// echo itensSupermercado($itens);
