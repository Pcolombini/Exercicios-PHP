<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css" media="screen">
		*{
			padding: 0px;
			margin: 0px;
			font-size: 20px;
			font-weight:bold;
		}
		section{
			padding:15px;
			border:solid 1px black;
			display: flex; 
			justify-content: center; 
			align-items: center;
		}
	</style>
</head>
<body>
<?php

function soma($a,$b){
	return $a + $b;
}

function subtracao ($a,$b){
	return $a - $b;
}

function divisao ($a,$b){
	return $a / $b;
}

function multiplicacao($a,$b)
{
	return $a * $b;
}

?>
<main>
<section>
	<section>
		<?php
		echo "2 x 2 = ".multiplicacao(2,2)."<br><br>";
		echo "10 / 5 = ".divisao(10,5)."<br><br>";
		echo "6 + 4 = ".soma(6,4)."<br><br>";
		echo "16 - 9 = ".subtracao(16,9)."<br><br>";
		?>
	</section>
</section>
</main>
</body>
