<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 33</title>
    <?php include_once 'funcoes.php';?>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1 id="title">
            Exercício 33
        </h1>
    </header>
    <main>
        <section>
            <div id="tarefas">
                <ul>
                    <li>Crie uma função;</li>
                    <li>Ela deve receber um parâmentro de nome e idade;</li>
                    <li>Imprima "Olá eu sou o NOME e tenho X anos";</li>
                </ul>
            </div>
            <div id="forms">
                <form action="index.php" method="post">
                    <fieldset>
                        <legend>Apresentação</legend>
                        <label for="">Qual o seu Nome</label><br>
                        <input type="text" name="nome" id="nome" required placeholder="Nome"><br>
                        <label for="">Qual a sua Idade</label><br>
                        <input type="text" name="idade" id="idade" required placeholder="Idade"></br>
                    </fieldset>
                    <div id="enviar">
                <input type="submit" value="Responder">
            </div>
                </form>
            </div>

            <div id="php">
                <?php 
                    $name = trim($_POST['nome']);
                    $age = trim($_POST['idade']);
                ?>
                <p>
                    <?= presentetion($name,$age) ?>
                </p>
            </div>
        </section>
    </main>
    <script src="main.js"></script>
</body>
</html>