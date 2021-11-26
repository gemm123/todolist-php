<?php

/*
Menampilkan todolist
*/
function showTodolist(){
    global $todoList;

    echo "TODOLIST" . PHP_EOL;

    foreach($todoList as $number => $values){
        echo "$number . $values" . PHP_EOL;
    }
}