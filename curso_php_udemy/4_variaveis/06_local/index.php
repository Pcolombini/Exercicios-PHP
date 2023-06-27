<?php 
// escopo local

function local(){
    $x = 4;
    echo "Escopo local, está dentro da função!<br>";
}

$x = "Escopo global, mesmo nome da var, na função, porém com escopo global";

echo "$x <br><br>";
local();

?>