<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precedencia</title>
    <style>
        .big{
            font-size: 28px;
        }
    </style>
</head>
<body>
    <section>
        <div class="big">
        <?php 
                echo(3+2*5);
                echo "<br>";
                echo(3+2) * 5;
                echo "<br>";
                echo 5+2/10 ;
                echo "<br>";

                $a = 5;
                $b = 2;
                $c = 10;

                echo $a+$b/$c;
                echo "<br>";
                echo $c + $b /$a;
                echo "<br>";

                $d = $a * $b * $c;

                echo $d;
                echo "<br>";

            ?>
        </div>
    </section>
</body>
</html>