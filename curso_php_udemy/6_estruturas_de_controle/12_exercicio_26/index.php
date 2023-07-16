<?php 
    /**
     * Crie uma variável que recebe uma velocidade de um carro;
     * Depois crie uma estrutura if que verifica essa velocidade;
     * Se a velocidade for menor que 40, imprima que o motorista está na velocidade correta;
     * se igual a 40, imprima que motorista precisa tomar cuidado;
     * Se maior que 40, imprima uma mensagem de multa
     */
    
?>
<h1>Verificando velocidade</h1>
<form action="index.php" >
<input type="number" name="velocidade" placeholder="KM/h"> <input type="submit" value="Verificar"><br><br>

</form>
<?php 
    $velMax = 40;
    $v = filter_input(INPUT_GET,'velocidade',FILTER_SANITIZE_NUMBER_INT);
        if(is_string($v)){
            $velocidade = intval($v);
        }
?>
<p>
    <strong>
        <?php 
            
            if(empty($velocidade)){
                echo "Digite a velocidade<br>";
                exit(0);
            }

            if($velocidade > $velMax){
                echo "Você foi multado<br>";
            } else if($velocidade == $velMax){
                echo "Tome cuidade com a velocidade<br>";
            } else if($velocidade < $velMax){
                echo "Você está na velocidade correta<br>";
            }
        ?>
    </strong>
</p>