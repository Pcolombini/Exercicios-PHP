<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de IF</title>
    <?php 
        /**
         * Crie variáveis com número e outras com string;
         * faça um if checando se é um número;
         * caso for, atribua a multiplicação dete número por 2 em outra variável;
         * crie um outro if, que checa se o novo número é maior que 100;
         * Se sim, imprima uma mensagem
         */
    ?>
</head>
<body>
    <?php 
        function produto($x, $y){
            return $x* $y; 
        }

        $numeroUm = 0;
        $fatorProduto = 2;
        $texto = " ";
    ?>
    <header>
        <h1>Checando variáveis com IF</h1>
    </header>
    <main>
        <form action="index.php" method="get">
            <legend>Entre com os dados</legend><br>
            <label for="texto">
                <input type="text" name="texto" id="" placeholder="Qual seu nome?">
            </label><br>
            <label for="numeroUm">
                <input type="number" name="numeroUm" required placeholder="Digite um número">
            </label><br><br>
            <input type="submit" value="Validar">
        </form>
        <section class="php">
            <p>
                <strong>
                    <?php 
                        $numeroUm = (int) filter_input(INPUT_GET,'numeroUm');
                        $texto = filter_input(INPUT_GET,FILTER_SANITIZE_STRING,'texto');
                        if (empty($texto)) {
                            echo "Informe o nome!";
                            exit(1);
                        }

                        if (isset($numeroUm) && !empty($numeroUm) && is_int($numeroUm)) {
                            echo "Número informado: $numeroUm<br>"."Número multiplicado por 2 = ".produto($numeroUm,$fatorProduto)."<br>";
                            if(produto($numeroUm,$fatorProduto) > 100){
                                echo "$texto, o produto do seu número é maior que 100";
                            } else {
                                echo "$texto, o produto do seu número não é maior que 100";
                            }
                        }
                    ?>
                </strong>
            </p>
        </section>
    </main>
</body>
</html>