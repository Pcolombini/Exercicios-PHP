<?php 

//global

$varUm = "Texto<br>";

print($varUm);

if(true){
    $varUm = "textoModificado<br>";

    print($varUm."dentro if, ou seja, o acesso do if é de escopo global<br>");

}

function escopoGlobal(){
    global $varUm;

    $varUm="<br>Texto Modificado Novamente Dentro Da Função Usando O Recurso [global]";
    print($varUm); 
}

escopoGlobal();