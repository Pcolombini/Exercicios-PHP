<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        // Faça com que o calendário exiba o dia atual em negrito, usando a função
        // date().

        function diaSemana(){
            $dia = date('D');
            switch ($dia) {
                case 'mon':
                    echo "Segunda-Feira";
                    break;
                case 'thi':
                    echo "Terça-Feira";
                case 'wed':
                    echo "Quarta-Feira";
                    break;
                case 'thu':
                    echo "Quinta-Feira";
                    break;
                case 'fri':
                    echo "Sexta-Feira";
                    break;
                case 'sat':
                    echo "Sábado";
                    break;
                case 'sun':
                    echo "Domingo";
                default:
                    break;
            }
        }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia</title>
</head>
<body>
    <p>
        <strong>
            <?php 
                echo "Hoje é dia ".date('d')."<br>";
                diaSemana();
            ?>
        </strong>
    </p>
</body>
</html>