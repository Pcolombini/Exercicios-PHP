<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .list{
            font-size: 14pt;
        }

        .resultado{
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 700;
            font-size: 18pt;
        }
    </style>
    <?php require 'functions.php'?>
    <title>Contagem de Vogais</title>
</head>
<body>
    <p class="list">
    1. Crie uma função chamada <strong>countVowels</strong> que recebe uma string como parâmetro.<br>

    2. A função deve retornar a quantidade de vogais presentes na string.<br>

    3. Utilize uma estrutura de repetição para percorrer cada caractere da string.<br>

    4. Utilize uma variável para armazenar o contador de vogais.<br>

    5. Considere que as vogais são as letras "a", "e", "i", "o" e "u", em minúsculas ou maiúsculas.<br>
    </p>
    <hr>
    <div>
        <div>
            <form action="" method="post">
                <textarea name="texto" id="texto" cols="30" rows="10"></textarea><br>
                <input type="submit" value="Calcular Vogais"><br>
            </form>
            <?php 
                $texto = $_POST['texto'];            
            ?>
        </div>
        <p class="resultado">
            <?= 
                countVowels("$texto");
            ?>
        </p>
    </div>
</body>
</html>