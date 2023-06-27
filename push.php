<?php

$carros = array ("ford ka","golf","kicks");

echo "No arrat tem ".count($carros)." elementos \n".PHP_EOL;

 foreach ($carros as $valor){
   echo $valor.PHP_EOL;
 }

array_push($carros, "palio","gol");

print_r("---\n");

foreach ($carros as $valor){
   echo $valor.PHP_EOL;
 }
 
?>