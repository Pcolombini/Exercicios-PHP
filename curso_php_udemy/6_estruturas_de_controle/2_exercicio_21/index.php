<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Condicionais IF</title>
</head>
<body>
    <h1>Testando condicionais</h1>
    <p>
        <li style="list-style: none;">Faça as seguintes verificações em estruturas if</li>
        <ul style="list-style-type: decimal;">
            <li>
                5 é maior que 2?
                <ol>
                    <?php 
                        $cinco = 5;
                        $dois = 2;
                        if ($cinco > $dois){
                            echo "5 é maior que 2<br>";
                        } else {
                            echo "item 1 é false<br>";
                        }
                    ?>
                </ol><br>
            </li>
            <li>
                Matheus é diferente de Pedro?
                <ol>
                   <?php 
                        $nomeUm = "Matheus";
                        $nomeDois = "Pedro";
                        if ($nomeDois != $nomeUm) {
                            echo "Os nome são difernetes<br>";
                        }
                    ?> 
                </ol><br>
            </li>
            <li>
                12 é menor ou igual a 11?
                <ol>
                   <?php 
                        $x = 12;
                        $y = 11;
                        if ($x <= $y) {
                            echo "12 é menor ou igual a 11<br>";
                        } else {
                            echo "item 3 é uma expressão falsa<br>";
                        }
                ?> 
                </ol><br>                
            </li>
        </ul>
    </p>
</body>
</html>