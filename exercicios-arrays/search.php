<?php

# ACHA O INDICE

$nomes = array("Paschoal","Cate","Maria Cecília");

print_r($nomes);
print_r("\n---\n");

$nNomes = array_search("Cate",$nomes);

print_r($nNomes);
echo PHP_EOL;