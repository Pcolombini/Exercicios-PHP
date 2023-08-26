<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon-16x16.png" type="image/x-icon">
    <title>Exercício 30 b</title>
</head>
<body>
    <main>
        <h1 id="title">
            Exercício 30b
        </h1>
        <section id="list">
            <ul id="lista">
                <li>Crie um array de 1 a 10</li>
                <li>Utilize um loop for para criar este array</li>
                <li>Dica: Você pode utilizar o método array_push(arr,elemento) para inserir um elemento em um array</li>
                <li>Imprima o array criado com o print_r</li>
            </ul>
            <hr>
            <?php 
                $arr = array();

                for ($i = 1; $i <= 10; $i++) {
                    array_push($arr,$i);
                }
            ?>
            <div id="box">
                <?php 
                    echo "<pre>";
                    print_r($arr);
                    echo "</pre>";
                ?>
            </div>
        </section>
    </main>
    <script src="main.js"></script>    
</body>
</html>