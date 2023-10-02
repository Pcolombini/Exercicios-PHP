<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 39</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            Exercício 39
        </h1>
    </header>
    <hr>
    <main>
        <section class="enunciado">
            <ul>
                <li>Crie uma função que recebe caracteristicas de algum objeto como argumento (carro, sofá, cafeteira), em array associativo;</li>
                <li>Array deve conter nome e preço;</li>
                <li>Retorne apenas os itens que custam mais que R$10;</li>
                <li>Imprima o retorno;</li>
            </ul>
        </section>
        <section>
            <p>
                <center><strong>Código desenvolvido:</strong></center>
                <pre>
                    <code>
                        php
                        $arr = array(
                            'civic' => 10,
                            'gol' => 8,
                            'bmw' => 15,
                            'mustang' => 25
                        ); 
                        function itens(array $arr)
                        {
                            $arr_itens = [];

                            foreach($arr as $item => $preco) {
                                if ($preco > 10) {
                                    array_push($arr_itens, $item);
                                }
                            }

                            return $arr_itens;
                        }
                    </code>
                </pre>
            </p>
        </section>
        <section class="codigo">
            <?php 
                require 'function.php';
                $item_maior_dez = itens($arr);
            ?>
                <p class="p">
                    Arrays e suas associações:
                    <p class="center">
                        <?php 
                            echo "Arrays<br>";
                            foreach ($arr as $cont => $preco) {
                                echo $cont." = ".$preco."<br>";
                            }
                        ?>
                    </p>
                </p>
                <p class="p">
                    Os indices que são maiores que dez são:
                    <p class="center">  
                        <?php 
                            echo "Arrays<br>";
                            foreach ($item_maior_dez as $cont) {
                                echo $cont."<br>";
                            };
                        ?>
                    </p>
                </p>
        </section>
    </main>
</body>
</html>