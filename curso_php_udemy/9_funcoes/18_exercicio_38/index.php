<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 38</title>
    <style>
        
        *{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            margin: 0;
            padding: 0;
        }

        li{
            list-style: disc;
            font-size: 10pt;
            margin: 8px;
        }

        p{
            text-align: center;
            margin: 4px;
        }

    </style>
    <?php require 'functions.php';?>
</head>
<body>
    <ul>
        <li>Crie uma funcão que receba um array de itens de supermercado</li>
        <li>Retorne este array em forma de string, separado por vírgula</li>
    </ul>
    <hr>
    <div>
        <p>
            <?php 
                echo itensSupermercado($itens);
            ?>
        </p>
    </div>
</body>
</html>