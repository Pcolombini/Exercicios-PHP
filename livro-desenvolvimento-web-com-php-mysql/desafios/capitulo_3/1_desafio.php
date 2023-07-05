<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        date_default_timezone_set('UTC');
        // Faça uma página que exiba a hora e a frase “Bom dia”, “Boa tarde” ou “Boa
        // noite”, de acordo com a hora. Use a condicional if e a função date().

        function cumprimento(){
            // if (date('G:i:s') >= 12){
            //     echo "Boa Tarde!";
            // } elseif (date('G:i:s') >= 18){
            //     echo "Boa noite!" ;
            // } else {
            //     echo "Bom dia!";
            // }
            
            $horaAtual = date('G');
            
            if($horaAtual >= 0){
            	echo "Bom Dia!";
            } elseif ($horaAtual >= 12 && $horaAtual < 18) {
            	echo "Boa tarde!";
            } else {
            	echo "Boa Noite!";
            }
        }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cumprimento</title>
</head>
<body>
    <header>
        <h1>
            <?php 
                echo "Olá, ";
                cumprimento()."<br/>";
            ?>
        </h1>
    </header>
    <main>
    	<p>
    		<?php
    			echo "Agora são: ".date('G:i:s')." Horas!";
    		?>
    	</p>
    </main>
</body>
</html>