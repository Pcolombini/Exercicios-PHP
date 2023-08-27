<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 34</title>
    <?php include_once 'funcoes.php';?>
    <style>
        html{   
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 300;
        }
        #title{
            text-align: center;
            color: gray;
        }

        form{
            margin-left: 22px;
        }
        #resultado p{
            text-align: center;
            text-shadow: 2px 2px grey;
            font-size: 22pt;
            box-shadow: 6px 8px 6px grey;
        }
    </style>
</head>
<body>
    <header>
        <h1 id="title">Exercício 34</h1>
    </header>
    <main>
        <form action="index.php" method="get">
            <label for="numero">
                <p>Informe um número</p><br>
                <input type="text" name="numero" id="numero">
            </label>
            <div style="margin-top: 6px;"><input type="submit" value="Enviar"></div>
        </form>
        <div id="php">
            <?php 
                $numero = trim(intval($_GET['numero']));
            ?>
        </div>
        <div id="resultado">
            <p>
                <strong>
                    <?= par($numero) ?>
                </strong>
            </p>
        </div>
    </main>
</body>
</html>