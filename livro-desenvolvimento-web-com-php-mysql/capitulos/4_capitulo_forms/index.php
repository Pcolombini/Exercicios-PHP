<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
</head>
<body>
    <h1>Gerenciador de Tarefas</h1>
    <form action="index.php" method="get">
        <fieldset>
            <legend>
                Nova Tarefa
            </legend>
            <label for="tarefa">
                Tarefa
            </label>
            <input type="text" name="nome" id="nome" placeholder="Nova tarefa">
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>
    <?php 
        if (isset($_GET['nome'])) {
            $_SESSION['listaDeTarefas'][] = $_GET['nome'];
        }

        $listaDeTarefas = array();

        if (isset($_SESSION['listaDeTarefas'])) {
            $listaDeTarefas = $_SESSION['listaDeTarefas'];
        }

        "<br>";
        
    ?>
    <table>
        <tr>
            <th>Tarefas</th>
        </tr>
        <?php foreach($listaDeTarefas as $tarefa) :?>
        <tr>
            <td><?php echo $tarefa; ?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>