<?php 
$str = "Paschoal";
$num = 32;

if(is_string($str)){
    echo "$str é uma string 1 <br>";
}
if(is_string($num)){
    echo "$num é uma string 2 <br>";
}
if(is_string("num")){
    echo "É uma string 3 <br>";
}
?>