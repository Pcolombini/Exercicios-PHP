<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Printf</title>
</head>
<body>
    <header>
        <h1>Função Printf</h1>
    </header>
    <main>
        <section class="conteudo">
            <p>
                <ul>
                    <li>
                        A função <span style="color: blue;font-weight: 600;">printf</span> tem a funcionalidade semelhante a print;
                    </li>
                    <li>
                        Porém podemos imprimir valores de forma dinâmica utilizando o símbolo de <span style="color: blue;font-weight: 600;">%</span>
                    </li>
                </ul>
                <p>
                    Exemplo:
                    <pre>
                        <code>
                            printf("Número %d",1);
                        </code>
                    </pre>
                </p>
            </p>
        </section>
        <section class="codigo">
            <p>
                Código: <br>
                
                    <code>
                        php<br>
                        <br>
                        // %s = significa tipo string, e php sabe qual é por que é definida no final;<br>
                        <br>
                        $nome = "Paschoal";<br>
                        printf("O nome é %s < br>",$nome); <br>
                        <br>
                        <p style="font-weight:600; ">
                            Saída:
                            <?php 
                                $nome = "Paschoal";
                                printf("O nome é %s",$nome);
                            ?>
                        </p><br>
                        // %d =significa tipo inteiro<br>
                        <br>
                        $n = 10;<br>
                        printf("O número é %d e o outro é %d",$n,150);<br>
                        <p style="font-weight:600; ">
                            Saída:
                            <?php 
                                 $n = 10;
                                 printf("O número é %d e o outro é %d",$n,150);
                            ?>
                        </p><br>
                        <br>
                        // %f = significa tipo float; <br>
                        <br>
                        printf("A temperatura é %.1f° C",33.5);
                        <p style="font-weight:600; ">
                            Saída:
                            <?php 
                                printf("A temperatura é %.1f° C",33.5);
                            ?>
                        </p><br>
                    </code>
                
            </p>
        </section>
    </main>
</body>
</html>