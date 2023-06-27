<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Concatenação</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		$saudacao = "Olá";
		$nome = "Paschoal ";
		$sobrenome = "Colombini";
	?>
	<p>
		Crie uma variável saudação, nome e outra de sobrenome;<br>
		Imprima tudo concatenado.<br>
	</p>
	<?php 
		echo $saudacao.", eu sou o ".$nome .$sobrenome ."!";
	 ?>
	 <p>
	 	Código usado: 
	 	<code>
	 		echo $saudacao.", eu sou o ".$nome .$sobrenome ."!";
	 	</code>
	 </p>
</body>
</html>