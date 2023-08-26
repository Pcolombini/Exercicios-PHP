<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon-16x16.png" type="image/x-icon">
    <title>Exercício 30</title>
</head>
<body>
    <h1 id="titulo">Exercício 30</h1>
    <hr>
    <p>
        <ul class="list">
            <li>Crie um array com número de 1 a 20;</li>
            <li>Crie um loop for para este array;</li>
            <li>Imprima apenas os pares;</li>
        </ul>
    </p>
    <hr>
    <div id="box">
        <?php 
            $arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

            for ($i=0; $i < count($arr); $i++) { 

                if ($arr[$i] % 2 == 0) {
                    echo "Número: <b>$arr[$i]</b><br>";
                }

            }
            
            // for ($i=1; $i < count($arr) ; $i+=2) { 
            //     echo "Número: $arr[$i]<br>";
            // }
        ?>
    </div>
    <script src="aula10.js"></script>
</body>
</html>