<?php

echo "Digite o seu nome: ".PHP_EOL;
$nome = readline("");
echo "Digite o seu sexo: ".PHP_EOL;
$sexo = readline("");
echo "Digite o seu idade: ".PHP_EOL;
$idade = readline("");

if ($sexo == "F" && $idade < 25) {
    echo "ACEITA!";
} else {
    echo "NÃO ACEITA!";
}