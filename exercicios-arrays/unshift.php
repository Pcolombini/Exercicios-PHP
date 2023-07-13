<?php

# ADICIONA ELEMENTO NO INÍCIO DO ARRAY

$nomes = array("Paschoal","Cate","Maria Cecília");

print_r($nomes);

print_r("\n---\n");

array_unshift($nomes, "Rosana","Davi");

// PUSH ADICIONA NO FIM DO ARRAY
array_push($nomes, "Andressa","Yan");

print_r($nomes);