<?php

#• Crie um array multidimensional que armazena o nome e o sobrenome de algumas pessoas, juntamente com suas respectivas idades. Imprima o nome e a idade da segunda pessoa na tela.

$pessoas = array(
  array ("nome" => "Paschoal","sobreNome" => "Colombini", "idade" => 32),
  array ("nome" => "cate","sobreNome" => "Colombini", "idade" => 33),
  array ("nome" => "Maria Cecília","sobreNome" => "Colombini", "idade" => 6)
  );
  
echo $pessoas[1]["nome"]." ".$pessoas [1]["idade"]." anos";