<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validando a idade</title>
    <style>
        html{
            font-family: monospace;
        }
        .idade{
            margin: 1px -7px;
        }
    </style>
</head>
<body>
    <form action="index.php" method="post">
        <fieldset style="border: none;">
            <legend>MAIOR IDADE!</legend><br>
            <label for="nome">Nome:
            </label>
                <input type="text" name="nome" id="nome"><br>
            <label for="idade">Idade:
            </label>
                <input type="number" name="idade" id="idade" class="idade"><br><br>
            <input type="submit" value="Consultar">
        </fieldset><br>
        <?php 
            $dados = array(
                'nome' => filter_input(INPUT_POST,'nome'),
                'idade' => filter_input(INPUT_POST,'idade')
            );
        ?>
    </form>
    <div>
    <table border="1">
        <tr>
            <th>Nome </th>
            <th>Idade </th>
        </tr>
        <tr>
            <td><?php echo $dados['nome']?></td>
            <td><?php echo $dados['idade']?></td>
        </tr>
    </table><br>
    </div>
    <div>
        <p>
            <?php 
                if (isset($dados['idade'])) {
                    if ($dados['idade'] >= 18) {
                        echo "Você é <strong>maior</strong> de idade!";
                    } else {
                        echo "Você é <strong>menor</strong> de idade";
                    }
                } elseif(empty($dados['idade'])) {
                    echo "Indice vázio";
                }
            ?>
        </p>
    </div>
</body>
=======
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validando a idade</title>
    <style>
        html{
            font-family: monospace;
        }
        .idade{
            margin: 1px -7px;
        }
    </style>
</head>
<body>
    <form action="index.php" method="post">
        <fieldset style="border: none;">
            <legend>MAIOR IDADE!</legend><br>
            <label for="nome">Nome:
            </label>
                <input type="text" name="nome" id="nome"><br>
            <label for="idade">Idade:
            </label>
                <input type="number" name="idade" id="idade" class="idade"><br><br>
            <input type="submit" value="Consultar">
        </fieldset><br>
        <?php 
            $dados = array(
                'nome' => filter_input(INPUT_POST,'nome'),
                'idade' => filter_input(INPUT_POST,'idade')
            );
        ?>
    </form>
    <div>
    <table border="1">
        <tr>
            <th>Nome </th>
            <th>Idade </th>
        </tr>
        <tr>
            <td><?php echo $dados['nome']?></td>
            <td><?php echo $dados['idade']?></td>
        </tr>
    </table><br>
    </div>
    <div>
        <p>
            <?php 
                if (isset($dados['idade'])) {
                    if ($dados['idade'] >= 18) {
                        echo "Você é <strong>maior</strong> de idade!";
                    } else {
                        echo "Você é <strong>menor</strong> de idade";
                    }
                } elseif(empty($dados['idade'])) {
                    echo "Indice vázio";
                }
            ?>
        </p>
    </div>
</body>
>>>>>>> 2d39a6fd27d6c7d5a592ae299342113d78dbeaf0
</html>