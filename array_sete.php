<?php

/*
Crie um array associativo com os nomes e notas de 5 alunos. Em seguida, calcule a média das notas utilizando a função array_sum() e count(), e imprima o resultado na tela.
*/

$alunoUm = array( 
    "nome" => "João",
    "notaUm" => 9,
    "notaDois" => 10,
    "notaTres" => 8.2
  );
  
  $somaUm = array_sum($alunoUm);
  
  $mediaUm = (($somaUm)/3);

echo $alunoUm["nome"].PHP_EOL."A soma das notas é: ".$somaUm.PHP_EOL."A sua média é: ".number_format($mediaUm,1).PHP_EOL.PHP_EOL;

$alunoDois = array( 
    "nome" => "Paschoal",
    "notaUm" => 9.1,
    "notaDois" => 7,
    "notaTres" => 8.5
  );
  
  $somaDois = array_sum($alunoDois);
  
  $mediaDois = (($somaDois)/3);

echo $alunoDois["nome"].PHP_EOL."A soma das notas é: ".$somaDois.PHP_EOL."A sua média é: ".number_format($mediaDois,1).PHP_EOL.PHP_EOL;

$alunoTres = array( 
    "nome" => "Maria",
    "notaUm" => 6,
    "notaDois" => 10,
    "notaTres" => 10
  );
  
  $somaTres = array_sum($alunoTres);
  
  $mediaTres = (($somaTres)/3);

echo $alunoTres["nome"].PHP_EOL."A soma das notas é: ".$somaTres.PHP_EOL."A sua média é: ".number_format($mediaTres,1).PHP_EOL.PHP_EOL;

$alunoQuatro = array( 
    "nome" => "José",
    "notaUm" => 9,
    "notaDois" => 7.5,
    "notaTres" => 8
  );
  
  $somaQuatro = array_sum($alunoQuatro);
  
  $mediaQuatro = (($somaQuatro)/3);

echo $alunoQuatro["nome"].PHP_EOL."A soma das notas é: ".$somaQuatro.PHP_EOL."A sua média é: ".number_format($mediaQuatro,1).PHP_EOL.PHP_EOL;

$alunoCinco = array( 
    "nome" => "Marcos",
    "notaUm" => 9.3,
    "notaDois" => 7.8,
    "notaTres" => 6
  );
  
  $somaCinco = array_sum($alunoCinco);
  
  $mediaCinco = (($somaCinco)/3);

echo $alunoCinco["nome"].PHP_EOL."A soma das notas é: ".$somaCinco.PHP_EOL."A sua média é: ".number_format($mediaCinco,1).PHP_EOL.PHP_EOL;