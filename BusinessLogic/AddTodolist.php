<?php
/*
Menambah todolist
*/
function addTodolist(string $todo){
    global $todoList;

    $number = sizeof($todoList) + 1;

    $todoList[$number] = $todo;
}