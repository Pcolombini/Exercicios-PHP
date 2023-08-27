<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função com parâmetros</title>
    <?php include_once 'funcoes.php'; ?>
</head>
<body>
    <header><h1 id="title">
        Funções com Parâmetros
    </h1></header>
    <main>
        <section>
            <div>
                <form action="index.php" method="post">
                    <p>Digite o primeiro número</p>
                    <div>
                    <input type="text" name="numeroUm" id="numeroUm">
                    </div>
                    <p>Digite o segundo número</p>
                    <div>
                    <input type="text" name="numeroDois" id="numeroDois">
                    </div>
                    <div><input type="submit" value="Somar"></div>
                </form>
            </div>
            <hr>
            <div class="resultado">
                <?php 
                    $numeroUm = trim(intval($_POST['numeroUm']));
                    $numeroDois = trim(intval($_POST['numeroDois']));
                ?>
                <div id="box">
                    <p>
                        <?= soma($numeroUm, $numeroDois); ?>
                    </p>
                </div>
            </div>
        </section>
        <section>
            <div>
                <form action="index.php" method="get">
                    <div>
                        <label for="carro">Qual seu carro?</label><br>
                        <input type="carro" name="carro" id="carro"><br>
                        <label for="velocidade">Qual a Velocidade máxima do seu carro?</label><br>
                        <input type="text" name="velocidade" id="velocidade"><br>
                    </div>
                    <div>
                        <input type="submit" value="Enviar">
                    </div>
                    <?php 
                        $carro = trim($_GET['carro']);
                        $velM = trim($_GET['velocidade']);
                    ?>
                </form>
                <hr>
            </div>
            <div>
                <p>
                    Tenho um carro <strong><?=$carro;?></strong> e sua
                    <?= velMax($velM); ?>
                </p>
            </div>
        </section>
    </main>
</body>
</html>
