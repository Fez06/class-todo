<?php

//1. recuperare dati della todo-list

$database = file_get_contents(__DIR__ . '/todo-list.json');

//2. convertire la stringa in un array associativo

$todo_list = json_decode($database, true);
//var_dump($todo_list);

/*
...
elaborazione dati
...
*/ 

//GESTIONE DELL'AGGIUNTA DI UN TODO

//GESTIONE DELLA CANCELLAZIONE DI UN TODO

//GESTIONE DELLA MODIFICA DEI DATI

 //restituire dati json

 header('Content-Type: application/json');

 echo json_encode($todo_list);