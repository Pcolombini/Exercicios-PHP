<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Ternário</title>
</head>
<body>
    <header>
        <h1>
            Comparação ternária
        </h1>
    </header>
    <main>
        <div>
            <p>
                <ul style="list-style-type: decimal-leading-zero;">
                    <li>Atribua dois número a variáveis distintas;</li>
                    <li>Faça uma comparação de menor ou igual com o operador ternário;</li>
                    <li>Imprima o resultado para ambas as possibilidades;</li>
                </ul>
            </p>
        </div>
        <div>
            <p>
                <code class="ltb">
                    $numeroUm = 7;<br>
                    $numeroDois = 11;<br>
                </code>
            </p>    
            <p>
                <code>
                    echo $numeroUm <= $numeroDois ? "7 é menor que número 11" : "7 não é menor que número 11"<br>
                </code>
            </p>
            <p>Resultado: 
                <?php 
                    $numeroUm = 7;
                    $numeroDois = 11;

                    echo $numeroUm <= $numeroDois ? "7 é menor que número 11" : "7 não é menor que número 11";
                ?>
            </p>
            <p>
                <code>
                    echo $numeroUm === $numeroDois ? "7 é indêtico ao número 11" : "7 não é indêtico ao número 11"<br>
                </code>
            </p>
            <p>Resultado: 
                <?php 
                    echo $numeroUm === $numeroDois ? "7 é idêntico ao número 11" : "7 não é idêntico ao número 11";
                ?>
            </p>
        </div>
    </main>
</body>
</html>