<?php
//usiamo require per includerre un altro file in questo file
require_once(__DIR__.'/functions.php');

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

if(isset($_POST['add'])){

    //echo "add";
    //die;
    //operazione add
    $todo_list = addTodo($todo_list, $_POST);     
}

//GESTIONE DELLA CANCELLAZIONE DI UN TODO
if(isset($_POST['delete'])){
    //operazione delete
    $todo_list = deleteTodo($todo_list, $_POST['delete']);
}

//GESTIONE DELLA MODIFICA DEI DATI
if(isset($_POST['edit'])){
    //operazione edit
    $todo_list = editTodo($todo_list, $_post);
}

 //restituire dati json

 header('Content-Type: application/json');

 echo json_encode($todo_list);