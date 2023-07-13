<?php

/*Crie um array de números inteiros e use um loop para calcular a soma de todos os elementos.
*/

print_r("Digite alguns números intieros:\n");

try{

$entrada = trim(fgets(STDIN));
$numInt = explode(" ",$entrada);

foreach ($numInt as $value){
  
  if (!filter_var($value,FILTER_VALIDATE_INT)){
    throw new Exception ("Digite números válidos!");
  }
}


}catch (Exception $e) {
  echo "Erro\n".$e ->getMessage();
  exit(1);
}

$soma = 0;
for ($i = 0; $i < count($numInt);$i++){
  $soma += $numInt[$i];
}
echo "A soma dos números é $soma\n;";

?>