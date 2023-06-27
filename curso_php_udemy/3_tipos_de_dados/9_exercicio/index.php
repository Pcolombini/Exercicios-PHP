<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercício</h1>
    <p>
        <?php 
        echo ("Imprimindo Strings: <br>");
        echo ("Nessa String foi usado aspas duplas \" \";<br>");
        echo ("Nessa String foi usado aspas simples ' ' ;<br>");
        echo ("<br>Vamos fazer uma chegam if: <br>");
        $nome = "Paschoal";
        if (is_string($nome)){
            echo("Se está vendo essa frase, o valor da variável chamada \"nome\"<br>
            é uma String, é tem o valor: $nome;");
        }
        ?>
    </p>
</body>
</html>