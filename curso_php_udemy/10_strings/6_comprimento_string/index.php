<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprimento da String</title>
</head>
<body>
    <header>
        <h1>
            Tamanho da String
        </h1>
    </header>
    <main>
        <section class="conteudo">
            <p>
                <ul>
                    <li>
                        Utilizando a função <span><strong><code>strlen</code></strong></span> com uma string como parâmetro, vamos receber o tamanho da string;
                    </li>
                    <li>
                        Ou eja, a quantidade de caracteres da mesma;
                    </li>
                </ul>
                <p>
                    Exemplo:<br>
                    <p style="border: 1px inset grey;">
                        <code>
                        1 php <br>
                        2 strlen($string);
                        </code>
                    </p>
                </p>
            </p>
        </section>
        <section class="codigo">
            <p>
                <p>
                    Código:<br>
                    <p style="border: 1px inset grey;">
                        <code>
                        1 php <br>
                        2<br>
                        3 $str1 = "Esta string é muito gende";<br>
                        4 $str2 = "Esta não";<br>
                        5<br>
                        6 echo strlen($str1);<br>
                        7 echo strlen($str2);<br>
                        8 <strong>Saída:</strong>
                        <br>
                        <br><strong><?php 
                                $str1 = "Esta string é muito gende";
                                $str2 = "Esta não";
                                
                                echo strlen($str1)."<br>";
                                echo strlen($str2)."<br>";
                        ?></strong>
                        </code>
                    </p>
                </p>
            </p>
        </section>
    </main>
</body>
</html>