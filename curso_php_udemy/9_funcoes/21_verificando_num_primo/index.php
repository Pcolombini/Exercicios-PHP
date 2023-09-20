<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Números Primos</title>
    <link rel="shortcut icon" href="../Images/icons8-desenvolvimento-96.png" type="image/x-icon">
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .enunciado {
            
            list-style:decimal;
            padding: 8px;
            font-weight: bold;
        }
        .res {
            text-align: center;
        }

        .enunciado ul{
            margin: 16px 32px;
        }
        .enunciado li{
            list-style:decimal;
            padding: 8px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <section class="enunciado">
        <ul>
            <li>Crie uma função chamada isPrime que recebe um número inteiro positivo como parâmetro.</li>
            <li>A função deve verificar se o número fornecido é um número primo.</li>
            <li>Um número primo é aquele que é divisível apenas por 1 e por ele mesmo.</li>
            <li>Caso o número fornecido seja menor que 2, retorne false.

            </li>
            <li>Caso contrário, percorra os números de 2 até a raiz quadrada do número fornecido e verifique se algum deles é um divisor do número. Se encontrar um divisor, retorne false. Caso contrário, retorne true.</li>
        </ul>
        <hr>
    </section>
    <?php
        require 'isPrime.php';
    ?>
</body>

</html>