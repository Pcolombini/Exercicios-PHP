<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inserindo PHP ao HTML</title>
</head>
<body>
	<div>
		<?php include_once('backEnd.php'); ?>
	</div>

	<div>
		<h1>
			Seja bem vindo ao nosso site!
		</h1>
		<p>
			<?= $nome; ?> veja nossas ofertas
		</p>

		<h2>Confira nossos principais produdos</h2>
		<ul>
			<?php foreach ($produtos as $p): ?>
			<li><?=$p;?></li>			
			<?php endforeach; ?>
		</ul>
	</div>
</body>
</html>