<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 29</title>
    <style>
        html{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .list{
            text-align: start;
            font-size: 16pt;
            list-style: none;
        }
        .center{
            text-align: center;
        }
    </style>
</head>
<body>
    <ul class="list">
        <li>Crie um array com valores inteiros de 10 a 100;</li>
        <li>Aplique o loop neste array;</li>
        <li>Quando entrar os valores 30 ou 40, pule para a próxima execução;</li>
    </ul>
    <hr>
    <p class="center">
    <?php 
        $arr = [10,20,30,40,50,60,70,80,90,100];
        // var_dump($arr);
        
        $contador = 0;

        while ($contador < count($arr)) {
            $n = $arr[$contador];

            if ($n == 40 || $n == 30) {
                echo "Pulou<br>";
                $contador++;
                continue;
            }

            echo "Elementos: $n <br>";
            

            $contador++;
        }
    ?>
    </p>
</body>
</html>