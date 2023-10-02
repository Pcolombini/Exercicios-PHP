<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interpolar Strings</title>
</head>
<body>
    <header>
        <h1>Interpolar Strings</h1>
    </header>
    <main>
        <section class="decricao">
            <p>
                Há duas formas que não interferem na funcionalidade do código, valendo a preferencia do programador!
                <ul>
                    <li>Usando aspas duplas "";</li>
                    <li>Usando chaves e o nome da variável {};</li>
                </ul>
                <p>
                    Se criassemos duas variáveis, nome e idade:
                    <pre>
                        <code>
                            $nome = "Paschoal";
                            $idade = 32;
                        </code>
                    </pre>
                    E quisessemos adicionar a informação dela a um texto, fariamos dessas duas formas:
                </p>
            </p>
        </section>
        <section class="codigo">
            <pre>
            <code>
                $nome = "Paschoal";
                $idade = 32;

                echo "Olá $nome, você tem {$idade} anos!";
            </code>
            </pre>
            <p>
                O resultado é:
                <pre>
                    <code>
                        Olá Paschoal, você tem 32 anos!
                    </code>
                </pre>
            </p>
            <?php 
                $nome = "Paschoal";
                $idade = 32;
                // echo "Olá $nome, você tem {$idade} anos!";
            ?>
        </section>
    </main>
</body>
</html>