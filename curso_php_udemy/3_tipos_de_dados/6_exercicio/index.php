<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
    <h1>Exercício</h1>
    <p><?php 
        $flutuante = 1.5;
        echo ("Esse número $flutuante é um float!<br>");
        $flutuante += 3.51;
        echo ("Esse número é $flutuante também!<br>");
        $flutuante -= 8.0;

        if(is_float($flutuante)){
            echo ("Entrou no if, esse número $flutuante é float também!<br>");
        }

    ?></p>
</body>
</html>