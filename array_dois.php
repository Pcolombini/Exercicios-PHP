<?php

/*
Crie um array de nomes de frutas e imprima apenas o terceiro elemento na tela.
*/

/* echo("Olá usuário, digite o nome de frutas que conhece\n");
$dados = array(fgets(STDIN));
$nomes_frutas(',',$dados);

foreach ($nomes_frutas as $value){
  echo $value[3].PHP_EOL;
} */

echo "Digite pelo menos 4 nomes de frutas!".PHP_EOL;

$entrada = trim(fgets(STDIN));
$nomes_frutas = explode(',',$entrada);

if(count($nomes_frutas) < 4){
  print_r("Digite pelo menos 4 nomes de frutas!");
} else {
  echo $nomes_frutas[2].PHP_EOL;
}
?>