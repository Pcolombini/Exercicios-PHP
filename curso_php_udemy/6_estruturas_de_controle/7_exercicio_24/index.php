<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 24</title>
    <style>
        html{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        h1{
            text-align: center;
        }

        code{
            color: blue;
        }
    </style>
</head>
<body>
    <header>
        <h1>IF e Else</h1>
    </header>
    <main>
        <ul>
            <li>Crie algumas variáveis com tipos de dados diferentes: STRING, INT, BOOL</li>
            <li>Cheque se a variável é um inteiro</li>
            <li>Caso sim, apresente uma mensagem confirmando o tipo do dado</li>
            <li>caso não, apresente outra mensagem</li>
        </ul>
        <div>
            <p>
                Variáveis criadas:
            </p>
            <p>

                <?php 
                     $numero = 2;
                     $nome = "Paschoal";
                     $verdade = true;
                ?>
                <code>
                    $numero = 2;<br>
                    $nome = "Paschoal";<br>
                    $verdade = true;<br>
                </code>
            </p>
            <p>
                Variável <code><strong>$numero</strong></code> é :
                <?php 
                    if (is_int($numero)) {
                        echo "inteiro e seu tipo é: ";
                        var_dump($numero);
                    } else {
                       echo "Não é inteiro";
                    }
                ?>
            </p>
            <p>
                Variável <code><strong>$nome</strong></code> é :
                <?php 
                    if (is_int($nome)) {
                        echo "inteiro";
                    } else {
                       echo "Não é inteiro, e seu tipo é: ";
                       var_dump($nome);
                    }
                ?>
            </p>
            <p>
                Variável <code><strong>$verdade</strong></code> é :
                <?php 
                    if (is_int($verdade)) {
                        echo "inteiro";
                    } else {
                       echo "Não é inteiro, e seu tipo é: ";
                       var_dump($verdade);
                    }
                ?>
            </p>
        </div>
    </main>
</body>
</html>