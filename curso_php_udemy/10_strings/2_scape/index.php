<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores de Escape</title>
    <style>
        span{
            color: blue;
        }
        .span-yellow{
            color:burlywood
        }
        .span-orange {
            color: darkorange
        }
    </style>
</head>

<body>
    <header>
        <h1>
            Valores de Escape
        </h1>
    </header>
    <main>
        <section class="conteudo">
            <p>
                Podemos utilizar alguns valores que executam funções especiais em <strong><span>strings</span></strong>;
            <ul>
                <li>No PHP utilizamos <span><strong>aspas duplas</strong></span>"";</li>
            </ul>
            <p>
                Exemplos:
            </p>
            <ul>
                <li>\n = nova linha;</li>
                <li>\t = tab</li>
                <li>\\ = barra invertida</li>
                <li>\$ = sinal de dólar</li>
            </ul>
            </p>
            <hr>
        </section>
        <section class="codigo">
            <h2>Execução:</h2>
            <p>
                // Quebra de linha:
            </p>
            <pre>
                <code>
                    echo "Essa linha fica em cima <span><strong>\n</strong></span>Após o barra invertia n, essa linha qebrou";
                </code>
            </pre>
            <?php
            echo "Essa linha fica em cima \n<br>Após o barra invertia n, essa linha qebrou";
            ?>
            <p>
                Se estiver usando um servidor web, esse <span><strong>escape</strong></span> não vai funcionar, pois na web o arquivo php é transformado em <span><strong>HTML</strong></span>, nesse caso precisamos alterar a requisição HTTP com uma função nativa: <br>
                <pre>
                    <?php 
                        // header('Content-type: text/plain');
                    ?>
                    <code>
                        <span style="color:burlywood;">header</span>();<br>
                        <span style="color:burlywood;">header</span>(<span style="color: darkorange;" >'Content-tyoe: text/plain'</span>);
                    </code>
                </pre>
                Dessa forma o que for escrito vai ser tratado como um texto puro e o php vai realizar a quebra da linha com o <span><strong>\n</strong></span>;
            </p>
            <p>
                // Tabulação:
            </p>
            <pre>
                <code>
                    <span class="span-yellow">echo </span><span class="span-orange">"Testando o tab</span><span>\t</span><span class="span-orange"> aqui:"</span>;
                    saída:
                </code>
            <?php 
                echo "Testando o tab \t&nbsp;aqui "
            ?>
            </pre>
        </section>
    </main>
</body>

</html>