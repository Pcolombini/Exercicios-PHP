<?php 

/** 
*Cálculo de Desconto
*Escreva uma função chamada calcularDesconto que recebe dois parâmetros: o valor de um produto e uma categoria.
*
*A função deve retornar o valor do produto com o desconto aplicado, de acordo com a categoria.
*
*Considere as seguintes categorias e seus respectivos descontos:
*
*"eletrônicos": 10% de desconto.
*
*"vestuário": 20% de desconto.
*
*"alimentos": 5% de desconto.
*
*Outras categorias: nenhum desconto.
*
*Se a categoria for desconhecida ou não estiver listada acima, o desconto será zero.
*
*O valor do produto e a categoria serão sempre fornecidos como argumentos da função.
*/

function calcularDesconto($valorProduto,$categoria){

    switch($categoria){
        case 'eletronico':
            $desconto = number_format($valorProduto * 0.9,2);
            echo "Valor do produto é $valorProduto reais e teve um desconto de 10% e vai para $desconto reais.<br>";
        break;
        case 'vestuario':
            $desconto = number_format($valorProduto * 0.8,2);
            echo "Valor do produto é $valorProduto reais e teve um desconto de 20% e vai para $desconto reais.<br>";
        break;
        case 'alimentos':
            $desconto = number_format($valorProduto * 0.95,2);
            echo "Valor do produto é $valorProduto reais e teve um desconto de 05% e vai para $desconto reais.<br>";
        break;
        case 'outras':
            $desconto = number_format($valorProduto * 1,2);
            echo "Valor do produto é $valorProduto reais e não teve desconto.<br>";
        break;
    }
}

calcularDesconto(2000.00,'eletronico');
calcularDesconto(850.51,'vestuario');
calcularDesconto(1050.73,'alimentos');
calcularDesconto(50.25,'outras');
