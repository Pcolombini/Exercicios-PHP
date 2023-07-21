<?php
/**
 * O custo de um carro novo ao consumidor
 * é obtido com a seguinte fórmula: 
 * custo final = custo de fábrica + 
 * (custo de fábrica * percentual do 
 * distribuidor) + 
 * (custo de fábrica * percentual de impostos) 
 * Considerando os valores abaixo, faça um programa para calcular o custo de fabricação.
 */
  // CRIANDO CONSTANTES DE VALORES FIXOS 
 define('PDD',1.28);
 define('PDI',1.45);
 
 // FUNÇÃO RETORNA O VALOR DO CARRO
 function valorCarro($cdf){
    $formulaCustoFinal = $cdf + ($cdf * PDD) + ($cdf * PDI);
    return $formulaCustoFinal;
 }
 
 // PEDINDO O VALOR DO CUSTO DD FABRICA
 echo("--------------------------\n");
 echo("Digite o valor de fábrica: ");
 $cdf = intval(trim(fgets(STDIN)));
 echo("--------------------------\n");
 
 // IMPRIMINDO RESULTADO
 echo "Valor R$".number_format(valorCarro($cdf),2);