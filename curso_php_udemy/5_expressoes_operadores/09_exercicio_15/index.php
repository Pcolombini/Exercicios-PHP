<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igualdade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="title">
        <h1>Operadores de iguadade</h1>
        <hr>
    </header>
    <main class="conteudo">
        <section class="conteiner">
            <p>
                <ul>
                    <li>
                        Crie uma operação que retorne falso com igualdade;
                    </li>
                    <li>
                        Crie uma operação que retorne verdadeiro com igualdade;
                    </li>
                </ul>
            </p>
            <section class="codigo">
                <form action="index.php" method="get" class="formulario">
                    <fieldset>
                        <legend>Comparando Números</legend>
                        <label for="numeroUm">Número Um</label>
                        <input type="number" name="numeroUm" id="numeroUm"><br>
                        <label for="numeroUm">Número Um</label>
                        <input type="number" name="numeroDois" id="numeroDois"><br>
                        <button type="submit" class="btn">Comparar</button>                      
                    </fieldset>
                </form>
                    <?php 
                        $numeroUm = $_GET['numeroUm'];
                        $numeroDois = $_GET['numeroDois'];

                        if ($numeroUm == $numeroDois) {
                            echo "<p>"."Números Iguais"."</p>";
                        } else {
                            echo "<p>"."Números Diferentes"."</p>";
                        }
                    ?>
            </section>
        </section>
    </main>
    
</body>
</html>