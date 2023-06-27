<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - 10 - Precedência aritimética</title>
    <style>
        .btn{
            margin-top: 3px;
        }
        .form{
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0px 0px 20px black;
            margin: 2px 2px;
        }
        .center{
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            align-items: center;
        }
        .php{
            padding-top: 15px;
            padding-left: 10px;
        }  
    </style>
</head>
<body>
    <header class="center">
        <h1>Operação com ordem de precedência</h1>
    </header>
    <main>
        <section>
            <form action="index.php" method="get">
                <fieldset class="form">
                    <label for="numero">Número Um</label><br>
                    <input type="number" name="numeroUm" id="numeroUm"><br>
                    <label for="numero">Número Dois</label><br>
                    <input type="number" name="numeroDois" id="numeroDois"><br>
                    <label for="numero">Número Três</label><br>
                    <input type="number" name="numeroTres" id="numeroTres"><br>
                    <input type="submit" value="Calcular" class="btn">
                </fieldset>
            </form>
        </section>
    </main>
    <section class="php">
        <div class="big">
            <?php 
                $numUm = $_GET ['numeroUm'];
                $numDois = $_GET ['numeroDois'];
                $numTres = $_GET ['numeroTres'];

                $precSub = ($numUm - $numDois) / $numTres;

                $precDiv = $numDois + $numTres / $numUm;

                $precMult = $numDois + $numTres * $numUm;
                ?>
        </div>
        <div class="center">
            <p>
                <?php 
                    echo "Expressão precedência <strong>Subtração</strong> (x - y) / z: $precSub<br><br>";
                ?>
            </p>
            <p>
                <?php 
                     echo "Expressão precedência <strong>Divisão</strong> z + y / x: $precDiv<br><br>";
                ?>
            </p>
            <p>
                <?php 
                    echo "Expressão precedência <strong>Multiplicação</strong> z + y * x: $precMult<br><br>";
                ?>
            </p>
        </div>
    </section>
</body>
</html>