<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 32b</title>
    <style>
        html{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .box{
            text-align: center;
        }
    </style>
</head>
<body>
    <header style="text-align: center;">
        <h1>Exercício 32b</h1>
    </header>
    <main>
        <section class="tarefas">
            <ul>
                <li>Crie uma função;</li>
                <li>Define uma variável nome e Sobrenome;</li>
                <li>Imprima os valores concatenados;</li>
            </ul>
            <hr>
        </section>
        <section class="php">
            <?php 
                function nomeCompleto() 
                {
                    $nome = 'Paschoal';
                    $sobreNome = ' Colombini';

                    $nomeCompleto = $nome.$sobreNome;
                    echo $nomeCompleto;
                }
            ?>
        </section>
        <section class="box">
                <p>
                    <strong>
                        <?= nomeCompleto() ?>
                    </strong>
                </p>
        </section>
    </main>
</body>
</html>