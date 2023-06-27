<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>modulo</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		function modulo($x,$y){
			return $x % $y;
		}

		function impar($a){
			if ($a % 2 == 0) {
				echo "Número Par"."<br>"; 
			} else {
				echo "Número Ímpar"."<br>";
			}
		}
	?>
	<header class="title">
		<h1>Modulo - Resto da Divisão</h1><hr>
	</header>
	<main class="principal">
		<section class="conteiner">
			<p>
				O Modulo <em><strong>(Resto)</strong></em> da divisão entre 10 e 5:
				<?php
					echo " ".modulo(10,5);
				?>
			</p>
			<p>
				O Modulo <em><strong>(Resto)</strong></em> da divisão entre 10 e 3:
				<?php
					echo " ".modulo(10,3);
				?>
			</p>
			<section>
				<p>
					Também podemos saber através do resto da divisão se um número é <em><strong>par</strong></em> ou <em><strong>ímpar</strong></em>.
				</p>
				<p>
					
					O 7 é um 
					<?php
						impar(7);
					?>
				</p>
				<p>
					O 34 é um
					<?php
						impar(34);
					?>
				</p>
				<p>
					Este número aleatório 
					<?php echo  $randon = rand(1,100);
					?> 

					é
					
					<?php
						impar($randon);
					?>
				</p>
			</section>
		</section>
	</main>
</body>
</html>