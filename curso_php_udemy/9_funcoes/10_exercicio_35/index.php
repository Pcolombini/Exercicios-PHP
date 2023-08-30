<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once'funcoes.php'?>
    <title>Exercício 35</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1 id="title">
            Exercício 35
        </h1>
    </header>
    <main>
        <section>
            <div id="tarefas">
                <ul>
                    <li>Crie uma função que receba um número;</li>
                    <li>Retorne o valor deste número ao quadrado;</li>
                </ul>
            </div>
            <div id="form">
                <form action="index.php" method="post">
                    <label for="">
                        Digite um número
                        <br>
                        <input type="text" name="numero" id="numero">
                    </label><br>
                    <div id="btn">
                        <input type="submit" value="Calcular">
                    </div>
                </form>
            </div>
            <div id="php">
                <?php 
                    $num = $_POST['numero'];
                    $numero = quandrado($num);
                ?>
            </div>
            <div id="resultado">
                <p><?= $numero?></p>
            </div>
        </section>
    </main>
</body>
</html>