<?php 

$_a = 1;

switch ($_a) {
    case 1:
        echo "entrou no caso 1<br>";
        break;
    
    default:
        echo "entrou no default<br>";
        break;
}

$_nome = "Paschoal";

switch ($_nome) {
    case 'Maria':
        echo 'entrou no case 1<br>';
        break;
    case 'Paschoal':
        echo 'entrou no case 2<br>';
        break;
    case 'Cate':
        echo 'entrou no case 3<br>';
        break;
    default:
        echo 'Não entrou em case nenhum<br>';
        break;
}