<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percorrendo uma String</title>
    <style>
        span {
            color: blue;
            font-weight: 600;
        }
        .borda {
            border: 1px inset black;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            Percorrendo uma String
        </h1>
    </header>
    <hr>
    <main>
        <section class="conteudo">
            <p>
                <ul>
                    <li>
                        Podemos percorrer cada um dos <span>caracteres de uma string</span>
                    </li>
                    <li>Para iss vamos utilizar uma <span>estrutura de repetição</span></li>
                    <li>
                        E o método <span>strlen</span>, para saber o <span>número de caracteres</span>
                    </li>
                    <li>
                        Com isso podemos iterar pela string completa
                    </li>
                </ul>
                <p>
                Exemplo:<br>
                </p>
                <p class="borda">
                    <code>
                        1 for ($x = 0; $x < strlen($str); $x++) {<br>
                        2 // codigo<br>
                        3 }<br>
                    </code>
                </p>
            </p>
        </section>
        <section class="codigo">
            <p>
                <p class="borda">
                    <code>
                        1 $nome = "Paschoal";<br>
                        2 <br>    
                        3 for ($i = 0; $i < strlen($nome); $i++) {<br>
                        4    $novoStr = $nome[$i]."< br>";<br>
                        5    echo $novoStr;<br>
                        6 } <br>
                    </code>
                </p>
                <p>
                    <span style="color:black;">Saída:</span>
                </p>
                <?php 
                    $nome = "Paschoal";

                    for ($i = 0; $i < strlen($nome); $i++) {
                        $novoStr = $nome[$i]."<br>";
                        echo $novoStr;
                    }
                ?>
            </p>
        </section>
    </main>
</body>
</html>