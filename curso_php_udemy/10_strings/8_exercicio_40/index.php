<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 40</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            Exercício 40
        </h1>
    </header>
    <main class="content">
        <section class="enunciado">
            <p>
                <ul class="list">
                    <li>
                        Percorra, a partir de um loop, a string:<br>
                        <ol>
                            O rato roeu a roupa do rei de roma;
                        </ol>
                    </li>
                    <li>
                        Imprima o número de letas "a" desta string;
                    </li>
                </ul>
            </p>
            <hr>
        </section>
        <section class="codigo">
            <p>
                Código:<br>
            </p>
            <p class="borda">
                <code>
                1    $str = "O rato roeu a roupa do rei de roma";<br>
                2<br>
                3    $contador = 0;<br>
                4<br>
                5   for ($i = 0; $i < strlen($str); $i++) {<br>
                6<br>
                7       &nbsp;&nbsp;if ($str[$i] === 'a') {<br>
                8           &nbsp;&nbsp;&nbsp;$contador++;<br>
                9       }<br>
                10<br>
                11  }<br>
                12<br>
                13  echo $contador;<br>
                </code>
            </p><br><br>
            <p>
                Saída:
                <p>
                    <?php 
                        require 'function.php';
                    ?>
                </p>
            </p>
        </section>
    </main>
</body>
</html>