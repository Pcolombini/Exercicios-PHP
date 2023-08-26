<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <title>Estrutura FOR</title>
</head>
<body>
    <center>
        <div>
            <p>
                <strong>
                    <?php 
                        echo "Começando com laço FOR<br>";
                        for ($i=0; $i <= 10; $i++) { 
                            echo "contador i = $i<br>";
                        }
                        echo "Imprimindo somente número pares<br>";
                        for ($i=2; $i <= 10; $i+=2) {
                            echo "contador i = $i<br>";
                            if ($i == 8) {
                                break;
                            }
                        }
                    ?>
                </strong>
            </p>
        </div>
    </center>
</body>
</html>