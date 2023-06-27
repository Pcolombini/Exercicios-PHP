<?php 

$x = 10;

$y =& $x;

print($x."<br>".$y."<BR>");

echo "\nApós mudar o valor da ref.";

$y = 3;

print("<br>".$x."<br>".$y."<BR>");

$x = 13;

print("<br>".$x."<br>".$y."<BR>");