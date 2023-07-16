<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
    <title>Verificando Idades com IF</title>
</head>
<body>
    <?php 
        $maioridade = 18;
        $idadeJoão = 14;
        $idadeMarcos = 21;
        $idadeTesla = 18;
        $idadeKurt = 17
    ?>
    <h1>
        Condicional if
    </h1>
    <p>
        <ul>
            <li>
                Crie variáveis que recebem idades;
            </li>
            <li>
                Cheque se as idades são maiores ou iguais a 18;
            </li>
            <li>
                Se sim, imprima uma mensagem dizendo que a pessoa é maior de idade;
            </li>
        </ul>
    </p>
    <section style="display: block;width: 435px; margin: auto;">
        <p>
            João tem 14 anos;<br>
            <?php 
                if ($idadeJoão >= $maioridade){
                    echo "João é maior de idade";
                } else {
                    echo "João é menor de idade";
                }
            ?>
        </p><p>
            Marcos tem 21 anos;<br>
            <?php 
                if ($idadeMarcos >= $maioridade){
                    echo "Marcos é maior de idade";
                } else {
                    echo "Marcos é menor de idade";
                }
            ?>
        </p>
        <p>
            Tesla tem 18 anos;<br>
            <?php 
                if ($idadeTesla >= $maioridade){
                    echo "Tesla é maior de idade";
                } else {
                    echo "Tesla é menor de idade";
                }
            ?>
        </p>
        <p>
            Kurt tem 17 anos;<br>
            <?php 
                if ($idadeKurt >= $maioridade){
                    echo "Kurt é maior de idade";
                } else {
                    echo "Kurt é menor de idade";
                }
            ?>
        </p>
    </section>
</body>
=======
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
    <title>Verificando Idades com IF</title>
</head>
<body>
    <?php 
        $maioridade = 18;
        $idadeJoão = 14;
        $idadeMarcos = 21;
        $idadeTesla = 18;
        $idadeKurt = 17
    ?>
    <h1>
        Condicional if
    </h1>
    <p>
        <ul>
            <li>
                Crie variáveis que recebem idades;
            </li>
            <li>
                Cheque se as idades são maiores ou iguais a 18;
            </li>
            <li>
                Se sim, imprima uma mensagem dizendo que a pessoa é maior de idade;
            </li>
        </ul>
    </p>
    <section style="display: block;width: 435px; margin: auto;">
        <p>
            João tem 14 anos;<br>
            <?php 
                if ($idadeJoão >= $maioridade){
                    echo "João é maior de idade";
                } else {
                    echo "João é menor de idade";
                }
            ?>
        </p><p>
            Marcos tem 21 anos;<br>
            <?php 
                if ($idadeMarcos >= $maioridade){
                    echo "Marcos é maior de idade";
                } else {
                    echo "Marcos é menor de idade";
                }
            ?>
        </p>
        <p>
            Tesla tem 18 anos;<br>
            <?php 
                if ($idadeTesla >= $maioridade){
                    echo "Tesla é maior de idade";
                } else {
                    echo "Tesla é menor de idade";
                }
            ?>
        </p>
        <p>
            Kurt tem 17 anos;<br>
            <?php 
                if ($idadeKurt >= $maioridade){
                    echo "Kurt é maior de idade";
                } else {
                    echo "Kurt é menor de idade";
                }
            ?>
        </p>
    </section>
</body>
>>>>>>> 2d39a6fd27d6c7d5a592ae299342113d78dbeaf0
</html>