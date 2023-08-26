<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 30c</title>
    <style>
        html{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
</head>
<body>
    <h1 id="title">Exercício 30c</h1>
    <hr>
    <ul>
        <li>Crie um array de 10 a 20 com o for;</li>
        <li>Faça um loop e cima do array criado dinamicamente;</li>
        <li>imprima apenas número ímpares</li>
    </ul>
    <hr>
    <?php 
        $arr = array();

    ?>
    <div id="box">
        <?php 

            for ($i = 10; $i <= 20; $i++) {
                array_push($arr,$i);

            }
            
            foreach ($arr as $v) {

                if ($v % 2 !== 0){

                    echo("<b>$v</b> <br>");

                }

            }
        ?>
    </div>
    <script src="main.js"></script>
</body>
</html>