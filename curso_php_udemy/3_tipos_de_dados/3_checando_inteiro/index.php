<?php 
$a = 10;

if (is_int($a)) {
    echo "\nVerdadeiro!\n1";
}

if(is_int(5.0)){
    print_r("\nVerdadeiro!\n2");
}

if (is_int(4)) {
    print_r("\nVerdadeiro!\n3");
}

echo "\n<br>";
?>