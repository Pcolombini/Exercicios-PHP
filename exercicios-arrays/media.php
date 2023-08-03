<?php
// Faça um programa que calcule a média simples (aritmética) de 3 valores quaisquer.

// Utilize as variáveis valor1, valor2 e valor3.

// PEGANDO OS VALORE

echo("Digite os valores\n");

echo("Valor 1: ");
$valor1 = trim(fgets(STDIN));
echo("Valor 2: ");
$valor2 = trim(fgets(STDIN));
echo("Valor 3: ");
$valor3 = trim(fgets(STDIN));

// RETORNANDO A MEDIA DOS VALORES

function media($valor1,$valor2,$valor3){
	$media = ($valor1 + $valor2 + $valor3)/3;
	return number_format($media,1);
}

// IMPRIMINDO OS RESULTADOS

echo "A media é: ".media($valor1,$valor2,$valor3);
