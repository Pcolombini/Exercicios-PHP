<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 37</title>
    <style>
        span{
            color: red;
        }

        .green{
            color: green;
        }
    </style>
    <?php require_once 'functions.php' ?>
</head>
<body>
    <div>
        <p>
            <ul>
                <li>Crie uma função chamada <strong>defineCorCarro</strong></li>
                <li>Adicion um parâmetro chamado <strong>cor</strong> com valor default <em><strong><span>vermelha</span></strong></em></li>
                <li>Retorne a cor do carro</li>
                <li>Imprima a cor, tanto com o parâmentro default, quanto com outra cor</li>
            </ul>
        </p>
    </div>
        <div class="php">
            <p>Parâmetro default</p>
            <pre>
                <span>
                    <?= defineCorCarro() ?>
                </span>
            </pre>
            <p>Parâmetro passado no argumento</p>
            <pre>
                <span class="green">
                    <?= defineCorCarro('Verde') ?>
                </span>
            </pre>
        </div>
</body>
</html>