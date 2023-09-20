<?php

function isPrime(int $num)
{

    for ($i = 2; $i < $num / 2; $i++) {
        if ($num % $i == 0) {
            return "Número não é Primo<br>";
        }
    }

    return "Número Primo<br>";
}

?>

<form action="" method="get">
    <div>
        <label for="">Qual o número:
            <input type="text" name="num">
        </label>

        <input type="submit" value="Calcular">
    </div>
</form>

<?php
$numero = intval($_GET['num']);
$numero = isPrime($numero);
?>

<div class="enunciado res">
    <?= $numero ?>
</div>