<?php

require_once __DIR__ . "/../BusinessLogic/AddTodolist.php";
require_once __DIR__ . "/../Model/Todolist.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewAddTodolist(){
    echo "MENAMBAH LIST".PHP_EOL;

    $todo = input("List (x untuk batal)");

    if($todo == "x"){
        echo "Batal menambah list".PHP_EOL;
    }else{
        addTodoList($todo);
    }
}