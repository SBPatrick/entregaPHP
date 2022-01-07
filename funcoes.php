<?php

function adicionarTarefa(&$array, $tarefa)
{
    array_push($array, ['nome' => $tarefa, 'feita?' => 'Não']);
}

function removerTarefa(&$array, $tarefa)
{
    $tarefa -= 1;
    unset($array[$tarefa]);
}

function tarefaFeita(&$array, $tarefa)
{
    $tarefa -= 1;
    $array[$tarefa]['feita?'] = 'Sim';
}