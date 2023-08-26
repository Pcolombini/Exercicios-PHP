<?php
// ORIENTADO AO ARRAY

$nomes = ['Paschoal', 'Cecília','Cate','Sabrina'];

foreach ($nomes as $familia) {
    echo ("O nome de cada menbro da família <b>Colombini</b>: $familia<br>");

    if ($familia == 'Paschoal') {
        echo 'Pai<br>';
    } 

    if ($familia == 'Cate') {
        echo 'Mãe<br>';
    }
}