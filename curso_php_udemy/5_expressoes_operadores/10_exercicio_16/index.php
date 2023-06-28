<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de igualdade, diferença, idêntico e não idêntico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="title">
        <h1>Comparação de variáveis</h1><hr>
    </header>
    <main class="conteudo">
        <section class="conteiner">
            <p>
                <ul>
                    <li>
                        Insira o valor 5 em uma variável, e o valor 3 em outra;
                    </li>
                    <li>
                        Teste os operadores de: igualdade, diferença,idêntico e não idêntico;
                    </li>
                </ul>
            </p>
            <p>Variável <strong><code>$um = 5</code></strong></p>
            <p>Variável <strong><code>$Dois = 3</code></strong></p>

            <section>
                <h3>Testando os operadores</h3>
                <p>
                    <code>
                        <ul>
                            <li>
                                Igualdade <strong>==</strong>
                            </li>
                            <li>
                                Diferença <strong>!=</strong>
                            </li>
                            <li>
                                Idêntico <strong>===</strong>
                            </li>
                            <li>
                                Não Identico <strong>!==</strong>
                            </li>
                        </ul>
                    </code>
                </p>
            </section>
            <section>
                <p> <code>$um == $dois :</code>
                    <?php
                        $um = 5;
                        $dois = 3;

                        if($um == $dois){
                            echo "As variáveis são iguais!";
                        } else {
                            echo "As variáveis não são iguais!";
                        }
                    ?>
                </p>
                <p> <code>$um != $dois :</code>
                    <?php
                        $um = 5;
                        $dois = 3;

                        if($um == $dois){
                            echo "As variáveis não são diferentes!";
                        } else {
                            echo "As variáveis são diferentes!";
                        }
                    ?>
                </p>
                <p> <code>$um === $dois :</code>
                    <?php
                        $um = 5;
                        $dois = 3;

                        if($um === $dois){
                            echo "As variáveis são idênticas!";
                        } else {
                            echo "As variáveis não são idênticas!";
                        }
                    ?>
                </p>
                <p> <code>$um !== $dois :</code>
                    <?php
                        $um = 5;
                        $dois = 3;

                        if($um !== $dois){
                            echo "As variáveis são não idênticas!";
                        } else {
                            echo "As variáveis não são não idênticas!";
                        }
                    ?>
                </p>
            </section>
        </section>
    </main>
</body>
</html>