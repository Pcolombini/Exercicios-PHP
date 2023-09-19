<?php 

function alterDados($nome, $idade)
{
    $nome = "Sr. $nome";
    $idade = "$idade anos";
    return [$nome, $idade];
}

$dados = alterDados("Paschoal",32);


print_r($dados);

echo "Olá $dados[0], você tem $dados[1]";