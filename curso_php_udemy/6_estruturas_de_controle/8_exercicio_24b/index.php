<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balança exercício 24b</title>
    <style>
        html{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        h1{

            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            Qual o Peso
        </h1>
    </header>
    <main>
        <ul>
            <li>Crie uma variável que recebe um peso</li>
            <li>Caso seja maior que 80, imprima a mensagem que está pesado de mais</li>
            <li>Se não, imprima "Peso dentro do limite</li>
        </ul><hr><br>
        <div>
            <?php 
                $pesoMax = 80;
            ?>
            <div>
                <form action="index.php" method="post">
                    <legend>Entre com o peso!</legend><br>
                    <label for="Peso">Peso: </label>
                    <input type="number" name="peso" id="peso"><br><br>
                    <input type="submit" value="Pesar">
                    <?php 
                        $peso = array(
                            'peso' => $_POST['peso']
                        );
                        
                    ?>
                </form>
                <hr><br>
            </div>
            <p>
                <?php 
                    if($peso['peso'] <= $pesoMax){
                    echo "O peso informado foi ".$peso['peso']."KG<br>Peso dentro do limite";
                    } else {
                        echo "Pesado de mais!";
                    }
                ?>
            </p>
        </div>
    </main>
</body>
=======
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balança exercício 24b</title>
    <style>
        html{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        h1{

            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            Qual o Peso
        </h1>
    </header>
    <main>
        <ul>
            <li>Crie uma variável que recebe um peso</li>
            <li>Caso seja maior que 80, imprima a mensagem que está pesado de mais</li>
            <li>Se não, imprima "Peso dentro do limite</li>
        </ul><hr><br>
        <div>
            <?php 
                $pesoMax = 80;
            ?>
            <div>
                <form action="index.php" method="post">
                    <legend>Entre com o peso!</legend><br>
                    <label for="Peso">Peso: </label>
                    <input type="number" name="peso" id="peso"><br><br>
                    <input type="submit" value="Pesar">
                    <?php 
                        $peso = array(
                            'peso' => $_POST['peso']
                        );
                        
                    ?>
                </form>
                <hr><br>
            </div>
            <p>
                <?php 
                    if($peso['peso'] <= $pesoMax){
                    echo "O peso informado foi ".$peso['peso']."KG<br>Peso dentro do limite";
                    } else {
                        echo "Pesado de mais!";
                    }
                ?>
            </p>
        </div>
    </main>
</body>
>>>>>>> 2d39a6fd27d6c7d5a592ae299342113d78dbeaf0
</html>