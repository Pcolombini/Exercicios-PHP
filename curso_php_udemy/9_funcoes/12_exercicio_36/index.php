<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 36</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mirza:wght@400;700&family=Roboto:wght@300;500&family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1 class="title">
            Exercício 36
        </h1>
    </header>
    <section class="todo">
        <div>
            <ul class="list">
                <li class="list">Crie uma função que recebe um array de números</li>
                <li class="list">Crie um novo array com apenas os número que são maiores que 7</li>
                <li class="list">Retorne este novo array e imprima na tela</li>
            </ul>
        </div>
    </section>
    <hr>
    <section class="center">
        <div class="func">
            <?php 
                function numero($num) : array
                {
                    $newNum = 0;
                    $num = array();
                    
                    return $num;
                }
            ?>
        </div>
        <div class="form">
            <form action="index.php" method="post">
                <fieldset>
                    <legend>Add números</legend>
                    <label for="">Adicione números aleatoriamente<br>
                        <input type="text" name="numero" id="numero">
                    </label>
                    <div class="btn">
                        <button type="submit" class="btn-btn">
                            Enviar
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="tratamento">
            <?php 
               // $numero = trim(intval($_POST['numero']));
            ?>
        </div>
        <div class="resultado">
            <p>
               
            </p>
        </div>
    </section>
</body>
</html>