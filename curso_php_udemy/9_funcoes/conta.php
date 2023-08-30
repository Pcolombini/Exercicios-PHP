<style>
    form{
        display: block;
        width: 188px;
        margin: 16px auto;
    }
</style>
<form action="conta.php" method="get">
    <label for="numeroUm">
        Primeiro número<br>
        <input type="text" name="numeroUm" id="numeroUm">
    </label><br>
    <label for="numeroUm">
        Segundo número<br>
        <input type="text" name="numeroDois" id="numeroDois">
    </label>
    <div>
        <input type="submit" value="Subtrair">
    </div>
    <?php 
        $numeroUm = trim(intval($_GET['numeroUm']));
        $numeroDois = trim(intval($_GET['numeroDois']));
    ?>
</form>
<?php 
    function sub($numeroUm, $numeroDois)
    {
        return (($numeroUm) - ($numeroDois));
    }
?>
<div style="font-size: 22pt;font-weight:700 ; text-align:center;">
    <p>Resultado:</p>
    <?= sub($numeroUm, $numeroDois); ?>
</div>