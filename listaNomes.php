<?php require __DIR__ . "/vendor/autoload.php";?>
<?php session_start(); ?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sessão</title>
    </head>
    <body>
        <header>
            <h1>Olá Alunos</h1>
        </header>
        <main>
            <div>
                <div>
                    <p>
                        <strong> Lista de Chegada</strong>
                    </p>
                </div>
                <div>
                    <form action="" method="get">
                        <fieldset>
                            <legend>Apresente-se</legend>
                            <label for="">
                                <input type="text" name="nomes" id="nomes">
                            </label>
                            <input type="submit" value="Cadastrar">
                        </fieldset>
                    </form>
                    <?php
                        if (isset($_GET['nomes'])) {
                            $_SESSION['lista_nomes'][] = $_GET['nomes'];
                        }

                        $lista_nomes = array();

                        if (isset($_SESSION['lista_nomes'])) {
                            $lista_nomes = $_SESSION['lista_nomes'];
                        }
                    ?>
                </div>
                <div>
                    <table>
                        <tr>
                            <th>
                                Nomes
                            </th>
                        </tr>
                        <tr>
                            <?php foreach ($lista_nomes as $nomes) : ?>
                            <td>
                                <?= $nomes ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </main>
    </body>
</html>