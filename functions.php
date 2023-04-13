<?php

function addTodo($todo_list, $params) {
    $todo = [
        'text' => $params['todo'],
        'done' => false
    ];

    $todo_list[] = $todo;// todolist e' un array php associativo a questo punto

    //salvare il nuovo todo nel file todos(il mio databse)
    //per farlo devo ritrasformarlo in una stringa ed e' per questo che usiamo encode
    file_put_contents(__DIR__.'/tofo_list.json', json_encode($todo_list));

    return $todo_list;
}

//funzione per cancellare

function deleteTodo($todo_list, $index) {
    unset($todo_list[$index]);

    file_put_contents(__DIR__.'/tofo_list.json', json_encode($todo_list));

    return $todo_list;
}



//funzione per modificare un todo

function editTodo($todo_list, $params) {

    $index = $params['edit'];

    $todo_list[$index] = array(
        'text' => $params['text'],
        'done' => false
    );

    //salvare il nuovo todo nel file todos(il mio databse)
    //per farlo devo ritrasformarlo in una stringa ed e' per questo che usiamo encode
    file_put_contents(__DIR__.'/tofo_list.json', json_encode($todo_list));

    return $todo_list;
}