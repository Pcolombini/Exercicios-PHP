<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritiméticos básicos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">

    <style>
        html{
            font-family: 'Roboto', sans-serif;
        }
        .title {
            display: flex;
            font-size: 16px;
            border: solid 0px black;
            flex-direction: column;
            flex-wrap: wrap;
            align-content: center;
        }
        .forms{
            /* display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-content: center; */
        }
    </style>
</head>

<body>
    <header class="title">
        <h1>
            Operadores Aritiméticos Básicos
        </h1>
    </header>
    <main>
        <section class="forms">
            <form action="index.php" method="get">
                <fieldset class="forms">
                    <label for="soma">Soma</label><br>
                    <input type="number" name="a1" id="a1" value="0">
                    <input type="number" name="b1" id="b1" value="0">
                    <input type="submit" value="Calcular">

                    <br>
                    <label for="sub">Subtração</label><br>
                    <input type="number" name="b2" id="b2" value="0">
                    <input type="number" name="a2" id="a2" value="0">
                    <input type="submit" value="Calcular">

                    <br>
                    <label for="mult">Multiplicação</label><br>
                    <input type="number" name="a3" id="a4" value="0">
                    <input type="number" name="b3" id="b4" value="0">
                    <input type="submit" value="Calcular">

                    <br>
                    <label for="div">Divisão</label><br>
                    <input type="number" name="a4" id="a4" value="1">
                    <input type="number" name="b4" id="b4" value="1">
                    <input type="submit" value="Calcular">

                    <br>
                </fieldset>
            </form>
        </section>
        <section class="php">
            <?php
            $a1 = (int)  $_GET['a1'];
            $b1 = (int)  $_GET['b2'];
            $soma = $a1 + $b1;

            $a2 = (int)  $_GET['a2'];
            $b2 = (int)  $_GET['b2'];
            $sub = $a2 - $b2;

            $a3 = (int)  $_GET['a3'];
            $b3 = (int)  $_GET['b3'];
            $mult = $a3 * $b3;

            $a4 = (float)  $_GET['a4'];
            $b4 = (float)  $_GET['b4'];
            $div = $a4 / $b4;
            ?>
        </section>
        <section>
            <article>
                <p>
                    <?php
                    echo "Soma: ".$soma;
                    ?>
                </p>
                <p>
                    <?php
                    echo "Subtração: ".$sub;
                    ?>
                </p>
                <p>
                    <?php
                    echo "Multiplicação: ".$mult;
                    ?>
                </p>
                <p>
                    <?php
                    echo "Divisão: ".$div;
                    ?>
                </p>
            </article>
        </section>
    </main>




</body>

</html>