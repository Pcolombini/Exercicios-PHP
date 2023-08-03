<?php
 // Considerando que todos os meses tenham 30 dias, calcular o total de dias de n meses.

 // PEGANDO O NUMERO DE MESES
 echo("Digite um número de meses: ");
 $meses = intval(trim(fgets(STDIN)));
 
 // RETORNANDO O CALCULO DE DIAS
 function dias($meses){
   return $meses * 30;
 }
 
 // IMPRIMINDO O RESULTADO
 echo("Em $meses meses tem ".dias($meses)." dias\n");