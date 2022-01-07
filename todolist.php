<?php

require_once 'funcoes.php';

$tarefas = [];
$i = 1;

adicionarTarefa($tarefas, 'Tomar café da manhã');
adicionarTarefa($tarefas, 'Tomar café da tarde');
adicionarTarefa($tarefas, 'Tomar café da noite');
adicionarTarefa($tarefas, 'Tomar café da madrugada');
tarefaFeita($tarefas, 1);
tarefaFeita($tarefas, 2);
tarefaFeita($tarefas, 3);
removerTarefa($tarefas, 4);

//var_dump($tarefas);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do List!</title>
</head>
<body>
    <h1>To Do List!</h1>
    <ul>
        <?php foreach ($tarefas as $tarefa) { ?>
        <li>Tarefa <?=$i?>: <?= $tarefa['nome'] ?> - Feita? <?= $tarefa['feita?'] ?> </li>
        <?php $i++;} ?>
    </ul>
</body>
</html>