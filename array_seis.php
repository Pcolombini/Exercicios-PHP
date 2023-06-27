<?php

/**
 * • Crie um array numérico com 10 elementos aleatórios. Ordene o array em ordem crescente e em ordem decrescente utilizando a função sort() e rsort(), respectivamente.
 */
 
 echo("Olá, digite 10 números!".PHP_EOL);
 
 try {
   $entrada = trim(fgets(STDIN));
   $dados = explode(" ",$entrada);
   
   if (!filter_var($dados, FILTER_VALIDATE_INT) && count($dados) < 10 || count($dados) > 10) {
     throw new Exception ("Digite números válidos!");
   }
 } catch (Exception $e) {
   echo "Não digite letras\n".$e -> getMessage();
   exit(1);
 }
 
 foreach ($dados as $valor){
   echo("Os números digitados são: $valor ".PHP_EOL);
 }
 
 foreach ($dados as $valor){
   sort($valor);
   
   echo("Os números digitados em order crescente são: $valor ".PHP_EOL);
 }
 
 foreach ($dados as $valor){
   rsort($valor);
   
   echo("Os números digitados em order decrescente são: $valor ".PHP_EOL);
 }