<?php

require_once 'funcoes.php';

$tarefas = [];
$i = 1;

adicionarTarefa($tarefas, 'Arrumar a cama');
adicionarTarefa($tarefas, 'Tomar banho');
adicionarTarefa($tarefas, 'Tomar café da manhã');
adicionarTarefa($tarefas, 'Começar a trabalhar');
adicionarTarefa($tarefas, 'Almoçar');
adicionarTarefa($tarefas, 'Ir para a academia');
adicionarTarefa($tarefas, 'Tomar banho');
adicionarTarefa($tarefas, 'Jantar');
adicionarTarefa($tarefas, 'Dormir');
tarefaFeita($tarefas, 1);
tarefaFeita($tarefas, 2);
tarefaFeita($tarefas, 3);
tarefaFeita($tarefas, 4);
tarefaFeita($tarefas, 5);
removerTarefa($tarefas, 1);

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
        <li>Tarefa <?=$i?>: <?= $tarefa['nome'] ?> - Feita? <?= $tarefa['feita?'] ?></li><br>
        <?php $i++;} ?>
</ul>
</body>
</html>